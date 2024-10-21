function initializePaginationAndTable(tableHeaderId, tableBodyId, paginationId, fetchUrl, itemsPerPage = 5, columnConfig = [], searchInputIds = []) {
    let currentPage = 1;
    let totalPages = 0;
    let list = [];
    let searchTerms = {};

    // Function to handle search input changes
    function updateSearchTerms() {
        searchTerms = searchInputIds.reduce((terms, id) => {
            const input = document.getElementById(id);
            if (input) {
                terms[id] = input.value.trim();
            }
            return terms;
        }, {});
    }

    // Function to fetch data from the endpoint using POST
    async function fetchData(page = 1) {
        try {
            updateSearchTerms(); // Update search terms before fetching

            const response = await fetch(fetchUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    page: page,
                    limit: itemsPerPage,
                    search: searchTerms,
                }),
            });
            if (!response.ok) throw new Error('Network response was not ok: ' + response.statusText);
            const data = await response.json();

            if (!Array.isArray(data.data)) {
                throw new Error('Expected an array but received: ' + typeof data.data);
            }

            list = data.data;
            totalPages = data.totalPages;

            currentPage = page;

            renderTable();
            renderPagination();
        } catch (error) {
            console.error('Error fetching data:', error);
        }
    }

    // Function to render table headers
    function renderTableHeaders() {
        const tableHeader = document.getElementById(tableHeaderId);
        if (!tableHeader) {
            console.error(`Table header element with ID "${tableHeaderId}" not found.`);
            return;
        }

        // Filter out the "No" column and count the remaining columns
        const columnsWithoutNo = columnConfig.filter(col => col.header !== 'No').length;
        
        // Calculate the percentage width for remaining columns using calc
        const widthStyleForRemainingColumns = columnsWithoutNo > 0 
            ? `calc((100% - 50px) / ${columnsWithoutNo})`
            : '0%'; // Handle edge case if no remaining columns

        tableHeader.innerHTML = columnConfig.map(col => {
            // Apply specific styles for "No" column and dynamic width for others
            const style = col.header === 'No'
                ? 'width: 50px; text-align: center;'
                : `width: ${widthStyleForRemainingColumns};`;

            return `<td style="${style}">${col.header}</td>`;
        }).join('');
    }



    // Function to render table rows
    function renderTable() {
        renderTableHeaders(); // Ensure headers are rendered first

        const tableBody = document.getElementById(tableBodyId);
        if (!tableBody) {
            console.error(`Table body element with ID "${tableBodyId}" not found.`);
            return;
        }

        if (list.length === 0) {
            // Show a single row indicating no data found
            const columnCount = columnConfig.length;
            tableBody.innerHTML = `<tr><td colspan="${columnCount}" style="text-align: center;">Data not found</td></tr>`;
            return;
        }
    
        const startIndex = (currentPage - 1) * itemsPerPage;

        tableBody.innerHTML = list.map((item, rowIndex) => 
            `<tr>
                ${columnConfig.map((col, colIndex) => {
                    const value = item[col.key] || 'N/A';
                    const displayValue = col.format ? col.format(value, startIndex + rowIndex) : value;

                    // Apply CSS class for the first column
                    const className = colIndex === 0 ? 'text-center' : '';

                    return `<td class="${className}">${displayValue}</td>`;
                }).join('')}
            </tr>`
        ).join('');
    }

    // Function to render pagination controls
    function renderPagination() {
        const paginationDiv = document.getElementById(paginationId);
        if (!paginationDiv) {
            console.error(`Pagination element with ID "${paginationId}" not found.`);
            return;
        }

        if (totalPages <= 1) {
            // If there's only one page, show "1" and "Next" button
            const createButton = (text, isDisabled = false, page = null) =>
                `<li class="page-item ${isDisabled ? 'disabled' : ''}">
                    <a class="page-link" href="#" onclick="${isDisabled ? 'return false;' : (page !== null ? `changePage(${page}); return false;` : 'return false;')}">${text}</a>
                </li>`;

            let buttons = '';
            
            buttons += createButton('Preview', true);

            // Show the page number "1"
            buttons += createButton('1', true); // 'true' makes it disabled, not clickable

            // Show "Next" button
            buttons += createButton('Next', currentPage === totalPages, currentPage + 1);

            paginationDiv.innerHTML = buttons;
            return;
        }

        const createPageItem = (page, text, isActive = false, isDisabled = false) =>
            `<li class="page-item ${isActive ? 'active' : ''} ${isDisabled ? 'disabled' : ''}">
                <a class="page-link" href="#" onclick="changePage(${page}); return false;">${text}</a>
            </li>`;

        let buttons = '';
        const addEllipsis = () => buttons += '<li class="page-item disabled"><span class="page-link">...</span></li>';

        // Previous button
        buttons += createPageItem(currentPage - 1, 'Previous', false, currentPage === 1);

        // Always show first page
        buttons += createPageItem(1, '1', currentPage === 1);

        // Conditionally show "..." before the last few pages
        if (currentPage > 4) addEllipsis();

        // Show pages around the current page
        for (let i = Math.max(2, currentPage - 1); i <= Math.min(totalPages - 1, currentPage + 1); i++) {
            buttons += createPageItem(i, i, i === currentPage);
        }

        // Conditionally show "..." after the last few pages
        if (currentPage < totalPages - 3) addEllipsis();

        // Always show the last page
        if (totalPages > 1) {
            buttons += createPageItem(totalPages, totalPages, currentPage === totalPages);
        }

        // Next button
        buttons += createPageItem(currentPage + 1, 'Next', false, currentPage === totalPages);

        paginationDiv.innerHTML = buttons;
    }


    // Function to handle page changes
    function changePage(page) {
        if (page >= 1 && page <= totalPages) {
            fetchData(page);
        }
    }

    // Initialize search input event listeners
    searchInputIds.forEach(id => {
        const input = document.getElementById(id);
        if (input) {
            input.addEventListener('input', () => fetchData(1));
        }
    });

    // Expose global functions if needed
    window.changePage = changePage;
    window.fetchData = fetchData;

    // Initial fetch and render
    fetchData(currentPage);
}
