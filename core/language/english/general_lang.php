<?php
//-------------------------------TRANSACTION MESSAGE---------------------------------------
$lang['success_created'] = 'Transaction successfully created.';
$lang['success_updated'] = 'Transaction successfully updated.';
$lang['success_deleted'] = 'Transaction successfully deleted.';
$lang['success_imported'] = 'Transaction successfully imported.';
$lang['success_updated_password'] = 'Password successfully updated.';
$lang['success_updated_user_email'] = 'User Email successfully updated.';
$lang['warning_registration'] = 'Warning. There are user with the same identity.';
$lang['warning_imported'] = 'Warning. There are user not imported.';
$lang['failed_created'] = 'Transaction failed to create.';
$lang['failed_updated'] = 'Transaction failed to update.';
$lang['failed_deleted'] = 'Transaction failed to delete.';
$lang['failed_imported'] = 'Transaction failed to import.';
//$lang['failed_registration'] = 'Registration failed. There are active user with the same identity.';
$lang['not_found'] = 'Data not found.';
$lang['invalid_database_name'] = 'Database Source and Destination must be different.';
$lang['invalid_connection'] = 'Connection could not be established.';
$lang['submit_confirm'] = 'Do you want to submit this transaction?.';
$lang['submit_approve'] = 'Do you want to approve this transaction?.';
$lang['submit_reject'] = 'Do you want to reject this transaction?.';
$lang['del_confirm'] = 'Do you want to delete this transaction?.';
$lang['print_confirm'] = 'Do you want to print this transaction?.';
$lang['please_fill'] = 'Please fill the detail row.';
$lang['change_password_confirm'] = 'Do you want to change this password?.';
$lang['process_confirm'] = 'Do you want to process this transaction?.';
$lang['lock_confirm'] = 'Do you want to lock this transaction?';
$lang['unlock_confirm'] = 'Do you want to open this transaction?';
$lang['unlock_success'] = 'Transaction successfully opened';
$lang['lock_success'] = 'Transaction was successfully locked';
$lang['process_contract_confirm'] = 'Are you sure to process contract?.';
$lang['please_wait'] = 'Please Wait';

//-------------------------------VALIDATION MESSAGE---------------------------------------
$lang['empty_selected_permit_date'] = 'Please add date at least 1 day.';
$lang['empty_notes'] = 'Remarks must be filled.';
$lang['empty_status_type'] = 'Status Type must be filled.';
$lang['exist_permit_date'] = 'Already have permit on this date ';
$lang['exist_leave'] = 'Already have request leave on this date ';
$lang['exist_permit'] = 'Already have request permit on this date ';
$lang['exist_status_date'] = 'Already have request status on this date ';

$lang['revisi_leave_before_date'] = 'You cannot leave revision before today';
$lang['leave_revision_more_than_old'] = 'Leave revision cannot request more leave from before';

$lang['empty_selected_leave_date'] = 'Please add date at least 1 day.';
$lang['revision_leave_error'] = 'Revision Leave Cannot More Than Leave Before';
$lang['no_data_change'] = 'Save failed, no data changes';

$lang['revision_permit_error'] = 'Revision Permit Cannot More Than Permit Before';
$lang['permit_revision_delete'] = 'Can not delete permit revision';

$lang['sick_error'] = 'Sick without a letter cannot more than 1 day in a month';

$lang['error_KTP'] = 'KTP must 16 digits.';

//-------------------------------TITLE---------------------------------------
$lang['title'] = 'Title';
$lang['dashboard'] = 'Dashboard';
$lang['ess'] = 'ESS (Employee Self Service)';
$lang['hss'] = 'HSS (Head Self Service)';
$lang['profile'] = 'Profile';
$lang['change profile'] = 'Change Profile';
$lang['administration'] = 'Administration';
$lang['configuration'] = 'Configuration';
$lang['reset email and password'] = 'Reset Email & Password';
$lang['open lock salary process'] = 'Open Lock Salary Period';
$lang['module'] = 'Module';
$lang['role'] = 'Role';
$lang['authorization'] = 'Authorization';
$lang['config approval'] = 'Config Approval';
$lang['user approval'] = 'Special Config Approval';
$lang['activity log'] = 'Activity Log';
$lang['database'] = 'Database';
$lang['debug database'] = 'Debug database';
$lang['user correction'] = 'User Correction';
$lang['insert bulk benefit deduction'] = 'Bulk Import Benefit & Deduction';
$lang['import employee status history'] = 'Import Employee Status History';
$lang['import absent hadirr'] = 'Import Absent Hadirr';

$lang['master hrd'] = 'Master HRD';
$lang['employee'] = 'Employee';
$lang['employee_stat'] = 'Employee`s Status';
$lang['department'] = 'Department';
$lang['division'] = 'Division';
$lang['salary division'] = 'Salary Division';
$lang['position'] = 'Position';
$lang['select_position'] = 'Select Position';
$lang['position applicant'] = 'Applicant Position';
$lang['branch'] = 'Branch';
$lang['select_branch'] = 'Select Branch';
$lang['group'] = 'Group';
$lang['group_name'] = 'Group Name';
$lang['attendance group'] = 'Attendance Group';
$lang['group salary'] = 'Group Salary';
$lang['from_attendance_machine'] = 'From Attendance Machine';
$lang['type'] = 'Type';
$lang['level'] = 'Level';
$lang['class'] = 'Class';
$lang['event'] = 'Event';
$lang['hamlet'] = 'Hamlet';
$lang['district'] = 'District';
$lang['city'] = 'City';
$lang['state'] = 'State';
$lang['choose_city'] = 'Select City';
$lang['required_city'] = '[Personal] City field is required';
$lang['choose_state'] = 'Select State';
$lang['required_state'] = '[Personal][Now Address] State field is required';
$lang['required_id_card_state'] = '[Personal][ID Card Address] State field is required';
$lang['choose_hamlet'] = 'Select Hamlet';
$lang['choose_district'] = 'Select District';
$lang['required_district'] = '[Personal] District field is required';
$lang['medical facility'] = 'Medical Facility';
$lang['choose_branch'] = '---Choose Branch---';
$lang['choose city'] = '---Choose City---';
$lang['hamlet_id'] = 'Hamlet ID';
$lang['hamlet_name'] = 'Hamlet Name';
$lang['district_id'] = 'District ID';
$lang['district_name'] = 'District Name';
$lang['state_id'] = 'State ID';
$lang['capital_city'] = 'Capital City';
$lang['med_facility_id'] = 'Medical Facility ID';
$lang['med_facility_name'] = 'Medical Facility Name';

$lang['master attendance'] = 'Master Attendance';
$lang['fixed shift'] = 'Fixed Shift';
$lang['flexible shift'] = 'Flexible Shift';
$lang['status type'] = 'Status Type';
$lang['date type'] = 'Date Type';
$lang['group shift'] = 'Group Shift';
$lang['master payroll'] = 'Master Payroll';
$lang['salary type'] = 'Salary Type';
$lang['rule type'] = 'Rules Type';
$lang['rules'] = 'Master Rules';
$lang['category pph'] = 'PPH Category';
$lang['pkp'] = 'Taxable Income';
$lang['ptkp'] = 'Non Taxable Income';
$lang['amount_ptkp'] = 'Amount PTKP';
$lang['npwp'] = 'Taxpayer Identification Number';
$lang['npp'] = 'NPP';
$lang['unit'] = 'Unit';
$lang['upah min. kota'] = 'Minimum Wage';
$lang['loan type'] = 'Loan Type';
$lang['payment_start_date'] = 'Start Date Payment';

$lang['transaction'] = 'Transaction';
$lang['latest_transaction'] = 'Latest Transaction';
$lang['trans config company'] = 'Trans Company Config';
$lang['trans config leave'] = 'Trans Leave Config';
$lang['trans config bpjs'] = 'Trans BPJS Config';
$lang['calendar per user'] = 'Calendar Per User';
$lang['calendar multiple user'] = 'Calendar Multi User';
$lang['calendar multiple user by group'] = 'Calendar Multi User By Group';
$lang['calendar security'] = 'Calendar For Security';
$lang['manual attendance per user'] = 'Manual Attendance Per User';
$lang['manual attendance per division'] = 'Manual Attendance Per Division';
$lang['manual status'] = 'Manual Status';
$lang['status editor'] = 'Status Editor';
$lang['attendance import'] = 'Attendance Import';
$lang['overtime break'] = 'Overtime Break';
$lang['overtime editor'] = 'Overtime Editor';
$lang['overtime import'] = 'Overtime Import';
$lang['overtime process'] = 'Overtime And Diligence Ben Process';
$lang['benefit editor'] = 'Benefit Editor';
$lang['permit editor'] = 'Permit Editor';
$lang['leave editor'] = 'Leave Editor';
$lang['announcement'] = 'Announcement';
$lang['leave adjustment'] = 'Leave Adjustment';
$lang['trans_config_leave'] = 'Trans Configuration Leave ';
$lang['trans_config_bpjs'] = 'Trans Configuration BPJS';
$lang['manual_attendance_per_user'] = 'Manual Attendance Per User';
$lang['manual_attendance_division'] = 'Manual Attendance Division';
$lang['status_editor'] = 'Status Editor';
$lang['overtime_import'] = 'Overtime Import';
$lang['attendance_import'] = 'Attendance Import';
$lang['overtime_break'] = 'Overtime Break';
$lang['overtime_editor'] = 'Overtime Editor';
$lang['imported_by'] = 'Imported By';
$lang['imported_form'] = 'Imported Form';
$lang['select_department'] = 'Select Department';
$lang['select_group'] = 'Select Group';

$lang['application for revision leave'] = 'Application for Revision Leave';

$lang['application for revision permit'] = 'Application for Revision Permit';

$lang['application'] = 'Application';
$lang['registration'] = 'Registration';
$lang['training extension'] = 'Training Extension';
$lang['extend'] = 'Extend';
$lang['permanent / contract recruitment'] = 'Permanent / Contract Recruitment';
$lang['employee data changes'] = 'Employee Data Changes';
$lang['employee config'] = 'Employee Config';
$lang['warning letter'] = 'Warning Letter';
$lang['promotion / demotion'] = 'Promotion / Demotion';
$lang['mutation'] = 'Mutation';
$lang['termination'] = 'Termination';
$lang['employment verification letter (skp)'] = 'Employment Verification Letter';
$lang['certificate of employment (skk)'] = 'Certificate Of Employment';
$lang['salary adjustment'] = 'Salary Adjustment';
$lang['salary bpjs adjustment'] = 'Salary BPJS Adjustment';
$lang['salary bpjs executive adjustment'] = 'Salary BPJS Executive Adjustment';
$lang['import salary'] = 'Import Salary';
$lang['import salary bpjs'] = 'Import Salary BPJS';
$lang['import salary spg'] = 'Import Salary SPM/SPG';
$lang['import benefit deduction'] = 'Import Benefit & Deduction';
$lang['import benefit deduction all event type'] = 'Import Benefit & Deduction For All Event';
$lang['annual benefit'] = 'Annual Benefit';
$lang['bonus benefit'] = 'Bonus Benefit';
$lang['regular benefit'] = 'Regular Benefit';
$lang['exclusive benefit'] = 'Exclusive Benefit';
$lang['regular deduction'] = 'Regular Deduction';
$lang['exclusive deduction'] = 'Exclusive Deduction';
$lang['loan'] = 'Loan';
$lang['loan payment'] = 'Loan Payment';
$lang['import salary'] = 'Salary Import';
$lang['account receivable'] = 'Account Receivable';

$lang['import_pph21'] = 'Inport PPH21';


$lang['event approval'] = 'Event Approval';

$lang['fuel and parking benefit process'] = 'Fuel & Parking Benefit Process';
$lang['salary and tax process'] = 'Salary & Tax Process';
$lang['salary bpjs executive process'] = 'BPJS Executive Salary Process';
$lang['salary bpjs process'] = 'BPJS Salary Process';
$lang['salary daily process'] = 'Daily Salary Process';
$lang['salary process'] = 'Salary Process';
$lang['tax process'] = 'Tax Process';
$lang['tax_process_list'] = 'Tax Process List';

$lang['report'] = 'Report';
$lang['report absensi personal'] = 'Personal Attendance Report';
$lang['report ho'] = 'Head Office Report';
$lang['report salary'] = 'Salary Report';
$lang['report salary daily'] = 'Daily Salary Report';
$lang['report salary spg'] = 'SPM/SPG Salary Report';
$lang['report calculation bpjs'] = 'BPJS Calculation Report';
$lang['report salary bpjs'] = 'BPJS Regular Salary Report';
$lang['report salary bpjs executive'] = 'BPJS Executive Salary Report';
$lang['report bpjs 37 column'] = 'BPJS 37 Column Report';
$lang['report salary daily process'] = 'Salary Daily Process Report';
$lang['report tunjangan prestasi'] = 'Achievement Benefit Report';
$lang['report attendance'] = 'Attendance Report';
$lang['report overtime'] = 'Overtime & Diligent Ben Report';
$lang['report fuel ben'] = 'Report Fuel & Parking Ben';
$lang['report leave'] = 'Leave Report';
$lang['report overtime editor'] = 'Overtime Editor Report';
$lang['report pending overtime editor'] = 'Overtime Editor Pending Report';
$lang['report benefit'] = 'Benefit Report';
$lang['report benefit by group'] = 'Benefit by Group Report';
$lang['report deduction'] = 'Deduction Report';
$lang['report general'] = 'General Report';
$lang['report employee'] = 'Employee Report';
$lang['report tax'] = 'Tax Report';
$lang['report other'] = 'Other Report';
$lang['report master'] = 'Master Data Report';
$lang['report rules'] = 'Master Rules Report';
$lang['salary slip'] = 'Salary Slip Report';
$lang['report absensi daily'] = 'Daily Attendance Report';
$lang['report end contract'] = 'End Contract Report';
$lang['report Start contract'] = 'Start Contract Report';
$lang['report termination'] = 'Termination Report';
$lang['report mutation'] = 'Employee Mutation Report';
$lang['report employee get sp'] = 'Employee got SP Report';
$lang['report promotion'] = 'Employee Promotion / Demotion Report';
$lang['report division'] = 'Division Report';
$lang['report loan'] = 'Loan Report';
$lang['report loan rekap'] = 'Loan Rekap Report';

$lang['manual book'] = 'Manual Book';
$lang['sign in'] = 'Sign In';
$lang['sign out'] = 'Sign Out';

//-------------------------------EVENT TYPE---------------------------------------
$lang['tunjangan prestasi'] = 'Achievement Benefit';

//-------------------------------LABEL---------------------------------------------

//trans_config_company
$lang['company_name'] = 'Company Name';
$lang['company_address'] = 'Company Address';
$lang['head_name'] = 'Name Of Head Company';
$lang['head_level'] = 'Level';
$lang['max_contract_period'] = 'Maximum Contract Period';
$lang['min_rehired_interval'] = 'Minimum Rehired Interval';
$lang['min_third_contract_rehired_interval'] = 'Minimum Third Contract Rehired Interval';
$lang['back_to_hometown_limit'] = 'Back To Hometown Limit';
$lang['enable_ot_req'] = 'Jabatan';
$lang['trans_config_company'] = 'Trans Configuration Company';

//trans_config_bpjs
$lang['max_salary_plafond_bpjs_ks'] = 'Maximum Salary Plafond For BPJS KS';
$lang['max_salary_plafond_bpjs_jp'] = 'Maximum Salary Plafond For BPJS JP';
$lang['rate_bpjs_jkk'] = 'Cut Rate BPJS JKK (%)';
$lang['rate_bpjs_jkm'] = 'Cut Rate BPJS JKM (%)';
$lang['rate_bpjs_jht'] = 'Cut Rate BPJS JHT (%)';
$lang['rate_bpjs_jp'] = 'Cut Rate BPJS JP (%)';
$lang['rate_bpjs_ks'] = 'Cut Rate BPJS KS (%)';
$lang['rate bpjs jkk'] = 'Rate BPJS JKK (%)';
$lang['rate bpjs jkm'] = 'Rate BPJS JKM (%)';
$lang['rate bpjs jht'] = 'Rate BPJS JHT (%)';
$lang['rate bpjs jp'] = 'Rate BPJS JP (%)';
$lang['rate bpjs ks'] = 'Rate BPJS KS (%)';
//dashboard
$lang['today_notif'] = 'Today Notification';
$lang['nothing_notif'] = 'You Don\'t Have Any Notification For Today';
$lang['pending_req_in'] = 'Pending Approval Request';
$lang['pending_req_out'] = 'Pending Transaction Request';
$lang['pending_req_ot_editor'] = 'Unverified Overime';
$lang['warning_emp_no_absent'] = 'Warning Employee No Absent';
$lang['personal_stat'] = 'Personal Statistic';
$lang['company_stat'] = 'Company Statistic';
$lang['total_active_employee'] = 'Total Active Employee This Month';
$lang['total_new_applicant'] = 'Total New Applicant This Month';
$lang['total_new_registration'] = 'Total New Registration This Month';
$lang['kontrak pensiun'] = 'Retired-Contract';
$lang['pelatihan'] = 'Training';
$lang['tetap'] = 'Permanent';
$lang['kontrak'] = 'Contract';
$lang['magang'] = 'Internship';
$lang['total_new_recruitment'] = 'Total New Promotion This Month';
$lang['contract'] = 'Contract';
$lang['permanent'] = 'Permanent';
$lang['total_new_warning_letter'] = 'Total New Warning Letter This Month';
$lang['total_new_promotion'] = 'Total New Promotion This Month';
$lang['total_new_mutation'] = 'Total New Mutation This Month';
$lang['total_new_termination'] = 'Total New Termination This Month';
$lang['total_eof_contract'] = 'Total End-Of-Contract-Employee This Month';

//att report
$lang['first_in'] = 'First In';
$lang['last_out'] = 'Last Out';
$lang['total_late'] = 'Total Late';
$lang['total_sick'] = 'Total Sick';
$lang['total_permit'] = 'Total Permit';
$lang['total_alpa'] = 'Total Alpa';
$lang['total_ot_this_month'] = 'Total Overtime This Month (Hour)';

//change profile
$lang['change_pass'] = 'Change Password';
$lang['current_pass'] = 'Current Password';
$lang['new_pass'] = 'New Password';
$lang['confirm_pass'] = 'Confirm New Password';
$lang['change_email'] = 'Change Email';
$lang['current_email'] = 'Current Email';
$lang['new_email'] = 'New Email';
$lang['confirm_email'] = 'Confirm New Email';

//config approval
$lang['branch_div_head'] = 'Branch Div. Head';
$lang['under_division'] = 'Under Division';
$lang['under_department'] = 'Under Department';
$lang['division_name'] = 'Division Name';
$lang['division_head'] = 'Division Head';
$lang['department_name'] = 'Department Name';
$lang['department_head'] = 'Department Head';
$lang['department_vice_head'] = 'Department Vice Head';
$lang['div_head'] = 'Division Head';
$lang['div_vice_head'] = 'Division Vice Head';
$lang['interval'] = 'Interval';
$lang['payroll_method'] = 'Payroll Method';
$lang['cash'] = 'Cash';
$lang['transfer'] = 'Transfer';
$lang['salary_component'] = 'Salary Component';
$lang['salary_group'] = 'Salary Group';
$lang['approval'] = 'Approval';
$lang['approval_user'] = 'Approval User';
$lang['approval_name'] = 'Approval Name';
$lang['approval_level'] = 'Approval Level';
$lang['approval_history'] = 'Approval History';
$lang['approval_date'] = 'Approval Date';
$lang['under_div_or_depart'] = 'Under Division/Department';
$lang['div_cc_email'] = 'Division CC Email';
$lang['processed_date'] = 'Processed Date';
$lang['status'] = 'Status';

//position applicant
$lang['position_applicant_id'] = 'Position Applicant ID';
$lang['position_applicant_name'] = 'Position Applicant Name';

//branch
$lang['branch_name'] = 'Branch Name';
$lang['branch_head'] = 'Branch Head';
$lang['branch_vice_head'] = 'Branch Vice Head';
$lang['branch_address'] = 'Branch Address';
$lang['company_npwp'] = 'Company MPWP';
$lang['user_npwp'] = 'User NPWP';
$lang['web_api'] = 'Web API';
$lang['branch_phone_area_code'] = 'Branch Phone Area Code';
$lang['branch_phone_number'] = 'Branch Phone Number';
$lang['overtime_limit'] = 'Overtime Limit';

//attendance group
$lang['attendance_group_id'] = 'Attendance Group ID';
$lang['attendance_group_name'] = 'Attendance Group Name';

//employee type
$lang['employee_type'] = 'Employee Type';
$lang['event_id'] = 'Event ID';
$lang['require_end_date'] = 'Require End Date';

//employee level
$lang['employee_level'] = 'Employee Level';
$lang['level_number'] = 'Level Number';

//employee class
$lang['employee_class'] = 'Employee Class';
$lang['employee_class_id'] = 'Employee Class ID';
$lang['employee_class_name'] = 'Employee Class Name';
$lang['meal_fee'] = 'Meal Fee';
$lang['transport_fee'] = 'Transport Fee';
$lang['insentive_fee'] = 'Insentive Fee';
$lang['present_fee'] = 'Present Fee';
$lang['diligence_fee'] = 'Diligence Fee';

//-------------------------------EVENT-------------------------------------
//employee
$lang['general'] = 'General';
$lang['required'] = 'Required';
$lang['general_info'] = 'General Information';
$lang['info'] = 'Information';
$lang['language'] = 'Language';
$lang['badge_number'] = 'Badge Number';
$lang['ssn'] = 'Social Security Number';
$lang['document'] = 'Documents';
$lang['id_card_number'] = 'Identity Card Number';
$lang['id_tax_number'] = 'Tax ID Number';
$lang['hired_date_registration'] = 'Hired Date Registration';
$lang['hired_date_latest'] = 'Hired Date Latest Transaction';
$lang['promotion_date'] = 'Promotion Date';
$lang['bpjs_info'] = 'BPJS Information';
$lang['bpjs_ktn_number'] = 'BPJS KTN Number';
$lang['bpjs_ktn_join_date'] = 'BPJS KTN Join Date';
$lang['bpjs_ktn_end_date'] = 'BPJS KTN End Date';
$lang['bpjs_ks_number'] = 'BPJS KS Number';
$lang['bpjs_ks_join_date'] = 'BPJS KS Join Date';
$lang['bpjs_ks_end_date'] = 'BPJS KS End Date';
$lang['medical_facility_level'] = 'Medical Facility Level';
$lang['medical_facility_refferal'] = 'Medical Facility First Refferal';
$lang['medical_facility_dentist'] = 'Dental Facility First Refferal';
$lang['medical_facility_class1'] = 'Medical Facility Class 1';
$lang['bank_info'] = 'Bank Information';
$lang['bank_name'] = 'Bank Name';
$lang['bank_account'] = 'Bank Account';
$lang['bank_branch'] = 'Bank Branch';
$lang['bank_acc_number'] = 'Bank Account Number';
$lang['insurance_info'] = 'Insurance Information';
$lang['insurance_name'] = 'Insurance Name';
$lang['insurance_number'] = 'Insurance Number';
$lang['personal_info'] = 'Personal Information';
$lang['gender'] = 'Gender';
$lang['male'] = 'Male';
$lang['m'] = 'M';
$lang['f'] = 'F';
$lang['female'] = 'Female';
$lang['husband'] = 'Husband';
$lang['wife'] = 'Wife';
$lang['spouse'] = 'Spouse';
$lang['child'] = 'Child/s';
$lang['birth_place'] = 'Birth Place';
$lang['birth_date'] = 'Birth Date';
$lang['religion'] = 'Religion';
$lang['nationality'] = 'Nationality';
$lang['passport_number'] = 'Passport Number';
$lang['mother_name'] = 'Mother Name';
$lang['id_card_address'] = 'ID Card Address';
$lang['address'] = 'Address';
$lang['current_address'] = 'Current Address';
// $lang['rt'] = 'RT';
// $lang['rw'] = 'RW';
$lang['zip_code'] = 'Zip Code';
$lang['photo'] = 'Photo';
$lang['upload_photo'] = 'Upload Photo';
$lang['contact_number'] = 'Contact Number';
$lang['mobile'] = 'Mobile';
$lang['phone'] = 'Phone';
// $lang['whatsapp'] = 'Whatsapp';
$lang['additional_info'] = 'Additional Information';
$lang['additional'] = "Additional";
$lang['blood_type'] = 'Blood Type';
$lang['smoking'] = 'Smoking';
$lang['health_condition'] = 'Health Condition';
$lang['interest'] = 'Interest';
$lang['transport_mode'] = 'Transport Mode';
$lang['car'] = 'Car';
$lang['company_car'] = 'Company Car';
$lang['motorcycle'] = 'Motorcycle';
$lang['company_motorcycle'] = 'Company Motorcycle';
$lang['onfoot'] = 'On Foot';
$lang['public_transportation'] = 'Public Transportation';
$lang['ref_by'] = 'Reference By';
$lang['emergency_contact_info'] = 'Emergency Contact Information';
$lang['emergency_contact'] = 'Emergency Contact';
$lang['family_info'] = 'Family Information';
$lang['family_card_number'] = 'Family Card Number';
$lang['upload_family_card'] = 'Upload Family Card';
$lang['history_family_info'] = 'History Family Information';
$lang['marital_status'] = 'Marital Status';
$lang['total_child'] = 'Total Child';
$lang['not_married'] = 'Not Married';
$lang['married'] = 'Married';
$lang['hb'] = 'Living Apart';
$lang['non_taxable_income_status'] = 'Non Taxable Income Status';
$lang['number_of_dependents'] = 'Number of Dependents';
$lang['detail_family_info'] = 'Detail Family Information';
$lang['family_relationship'] = 'Family Relationship';
$lang['education_info'] = 'Education Information';
$lang['institution'] = 'Institution';
$lang['degree'] = 'Degree';
$lang['working_experiences_info'] = 'Working Experiences Information';
$lang['company'] = 'Company';
$lang['history_career_info'] = 'History Career Information';
$lang['employee_event_info'] = 'Event Information';
$lang['download'] = 'Download';
$lang['upload'] = 'Upload';
$lang['preview'] = 'Preview';
$lang['preview_data'] = 'Preview Data';
$lang['affect_pph'] = 'Affect PPH';
$lang['send_email_notification'] = 'Send Email Notification';
$lang['template'] = 'Template';
$lang['select_category_pph'] = 'Select Category PPH';
$lang['user'] = 'User';

//ESS/HSS
$lang['year'] = 'Year';
$lang['remaining_leave'] = 'Remaining Leave';
$lang['jan'] = 'January';
$lang['feb'] = 'February';
$lang['mar'] = 'March';
$lang['apr'] = 'April';
$lang['may'] = 'May';
$lang['jun'] = 'June';
$lang['jul'] = 'July';
$lang['aug'] = 'August';
$lang['sep'] = 'September';
$lang['oct'] = 'October';
$lang['nov'] = 'November';
$lang['dec'] = 'December';
$lang['january']    = "January";
$lang['february']    = "February";
$lang['march']        = "March";
$lang['april']        = "April";
$lang['mayl']        = "May";
$lang['june']        = "June";
$lang['july']        = "July";
$lang['august']        = "August";
$lang['september']    = "September";
$lang['october']    = "October";
$lang['november']    = "November";
$lang['december']    = "December";
$lang['mon'] = 'Mon';
$lang['tue'] = 'Tue';
$lang['wed'] = 'Wed';
$lang['thu'] = 'Thu';
$lang['fri'] = 'Fri';
$lang['sat'] = 'Sat';
$lang['sun'] = 'Sun';
$lang['ot'] = 'Overtime';
$lang['ot_req_form'] = 'Overtime Request Form';
$lang['pre_shift'] = 'Pre Shift';
$lang['post_shift'] = 'Post Shift';
$lang['ben'] = 'Benefit';
$lang['ben_req_form'] = 'Benefit Request Form';
$lang['select_event_type'] = 'Select Event Type';
$lang['leave'] = 'Cuti';
$lang['leave_req_form'] = 'Leave Request Form';
$lang['select_status_type'] = 'Select Status Type';
$lang['permit'] = 'Permit';
$lang['permit_req_form'] = 'Permit Request Form';
$lang['duty_req_form'] = 'Duty Request Form';
$lang['company_npwp'] = 'Company NPWP';
$lang['npwp_group'] = 'Group NPWP';
$lang['select_user'] = 'Select User';
$lang['month'] = 'Month';
$lang['months'] = 'Months';
$lang['week'] = 'Week';
$lang['weeks'] = 'Weeks';
$lang['day'] = 'Day';
$lang['days'] = 'Days';


//custom
$lang['tax_period'] = 'Tax Period';
$lang['tax_year'] = 'Tax Year';
$lang['rectification'] = 'Rectification';
$lang['tax_code'] = 'Tax Code';
$lang['gross_amount'] = 'Gross Amount';
$lang['number_of_pph'] = 'Number of PPH';
$lang['country_code'] = 'Country Code';
$lang['number'] = 'Number';
$lang['new'] = 'New';
$lang['export'] = 'Exspor';

//custom_error
$lang['error_userid'] = 'User ID Not Found';
$lang['error_npwp_perusahaan'] = 'Company TIN Not Found';
$lang['error_nama'] = 'Name Not Found';
$lang['error_npwp'] = 'NPWP Not Found';
$lang['error_all'] = 'Unregistered Employee';
$lang['error_1'] = 'Employee Data Error';
$lang['error_name'] = 'Data Tidak Dapat Dimasukkan';
$lang['success_name'] = 'Data Entered Successfully';
$lang['Entered_name'] = 'Data Can Be Entered';
$lang['error_period'] = 'The Upload Tax Period Must Be the Same';
$lang['error_period_sudah'] = 'The Upload Tax Period Has Been Processed With This User';
$lang['error_npwp_group'] = 'NPWP Group Is Not the Same As Others';
$lang['error_number'] = 'Transactions cannot be changed';
$lang['error_empty'] = 'The form cannot be empty';



//applicant
$lang['applicant_form'] = 'Applicant Form';
$lang['applicant'] = 'Applicant';
$lang['apply_position'] = 'Position To Apply';
$lang['apply_branch'] = 'Branch To Apply';

//registration
$lang['registration_form'] = 'Registration Form';
$lang['registration_appr_form'] = 'Registration Approve Form';

//training extension
//nothing

//recruitment
//nothing

//employee data changes
//nothing

//employee config
$lang['employee_config_info'] = 'Employee Config Information';
$lang['current_union_cut'] = 'Current Union Cut';
$lang['union_cut'] = 'Union Cut';
$lang['new_union_cut'] = 'New Union Cut';
$lang['current_bpjs_ks'] = 'Current BPJS KS (%)';
$lang['new_bpjs_ks'] = 'New BPJS KS (%)';
$lang['current_bpjs_jht'] = 'Current BPJS JHT (%)';
$lang['new_bpjs_jht'] = 'New BPJS JHT (%)';
$lang['current_bpjs_jp'] = 'Current BPJS JP (%)';
$lang['new_bpjs_jp'] = 'New BPJS JP (%)';
$lang['current_level_ben'] = 'Current Level Benefit';
$lang['new_level_ben'] = 'New Level Benefit';
$lang['current_duty_ben'] = 'Current Duty Benefit';
$lang['new_duty_ben'] = 'New Duty Benefit';
$lang['current_family_ben'] = 'Current Family Benefit';
$lang['new_family_ben'] = 'New Family Benefit';
$lang['current_oot_ben'] = 'Current Out Of Town Benefit';
$lang['new_oot_ben'] = 'New Out Of Town Benefit';
$lang['level_ben'] = 'Level Benefit';
$lang['duty_ben'] = 'Duty Benefit';
$lang['child_ben'] = 'Child Benefit';
$lang['oot_ben'] = 'Out of Town Benefit';
$lang['achievement_subsidy_ben'] = 'Achievement Subsidy Benefit';
$lang['back_to_hometown_limit'] = 'Back To Hometown Limit';
$lang['get_fuel_ben'] = 'Get Fuel Benefit';
$lang['get_parking_ben'] = 'Get Parking Benefit';
$lang['exclude_company_bpjs_jp'] = 'Exclude Company BPJS JP';
$lang['current_achievement_subsidy_ben'] = 'Current Achievement Subsidy Benefit';
$lang['new_achievement_subsidy_ben'] = 'New Achievement Subsidy Benefit';
$lang['current_get_fuel_ben'] = 'Current Get Fuel Benefit';
$lang['new_get_fuel_ben'] = 'New Get Fuel Benefit';
$lang['current_get_parking_ben'] = 'Current Get Parking Benefit';
$lang['new_get_parking_ben'] = 'New Get Parking Benefit';
$lang['new_exclude_company_bpjs_jp'] = 'New Exclude Company BPJS JP';
$lang['current_exclude_company_bpjs_jp'] = 'Current Exclude Company BPJS JP';
$lang['current_back_to_hometown_limit'] = 'Current Back To Hometown Limit';
$lang['new_back_to_hometown_limit'] = 'New Back To Hometown Limit';

//warning letter
$lang['current_level_warning_letter'] = 'Current Level Warning Letter';
$lang['new_level_warning_letter'] = 'New Level Warning Letter';
$lang['current_sp'] = 'Current SP';
$lang['level_sp'] = 'SP Level';

//promotion/demotion
$lang['current_level'] = 'Current Level';
$lang['new_level'] = 'New Level';
$lang['current_division'] = 'Current Division';
$lang['new_division'] = 'New Division';
$lang['current_position'] = 'Current Position';
$lang['new_position'] = 'New Position';
$lang['current_class'] = 'Current Class';
$lang['new_class'] = 'New Class';

//mutation
$lang['current_group'] = 'Current Group';
$lang['new_group'] = 'New Group';
$lang['current_saldiv'] = 'Current Salary Division';
$lang['new_saldiv'] = 'New Salary Division';
$lang['current_group_shift'] = 'Current Group Shift';
$lang['new_group_shift'] = 'New Group Shift';
$lang['get_ben'] = 'Get Extra Benefit';

//termination
$lang['termination_category'] = 'Termination Category';
$lang['effective_date_note'] = 'This date is the last date the employee worked';
$lang['status_bl'] = 'Blacklist Status';
$lang['bl_notes'] = 'Blacklist Notes';

//employee verivication letter
//nothing

//certificate of employment
//nothing

//salary adjustment
$lang['new_salary'] = 'New Salary';

//salary BPJS adjustment
$lang['new_bpjs_ktn_salary'] = 'New BPJS KTN Salary';
$lang['new_bpjs_ks_salary'] = 'New BPJS KS Salary';
$lang['new_bpjs_exec_ktn_salary'] = 'New BPJS KTN Executive Salary';
$lang['new_bpjs_exec_ks_salary'] = 'New BPJS KS Executive Salary';

//salary BPJS Executive adjustment
//nothing

//semua import salary
//nothing

//import benefit deduction
$lang['form_import'] = 'Form Import';
$lang['form_export'] = 'Form Export';
$lang['form_import_detail'] = 'Form Import Detail';

//all benefit & all deduction
//nothing

//loan
$lang['loan_type'] = 'Loan Type';
$lang['first_date_payment'] = 'First Date Payment';
$lang['tenor'] = 'Tenor Payment';
$lang['loan_interest'] = 'Loan Interest (%)';
$lang['payment_plan'] = 'Payment Plan';
$lang['seq'] = 'Sequence';
$lang['total_loan_payment'] = 'Total Loan Payment';
$lang['total_outstanding_payment'] = 'Total Outstanding Payment';
$lang['payment'] = 'Payment';

// AR
$lang['total_receive_ar'] = 'Total Receive AR';
$lang['total_outstanding_ar'] = 'Outstanding AR';
$lang['receive_start_date'] = 'Start Date Receive';
$lang['receive_plan'] = 'Receive Plan';

//loan type
$lang['loan_type_id'] = 'Loan Type ID';
$lang['loan_type_name'] = 'Loan Type Name';
$lang['loan_id'] = 'Loan ID';

//loan payment
$lang['current_outstanding_loan'] = 'Current Outstanding Loan';
$lang['current_outstanding_loan_including_future_manual_payment'] = 'Outstanding Loan Including Future Manual Payment';
$lang['payment method'] = 'Payment Method';
$lang['benefit_date'] = 'Benefit Date';
$lang['benefit_amount'] = 'Benefit Amount';
$lang['payment_amount'] = 'Payment Amount';


//----------------------------------------TRANSACTION-----------------------------------

//semua calendar (per user, multiple, security)
$lang['select_year'] = 'Select Year';
$lang['calendar'] = 'Calendar';
$lang['select_group'] = 'Select Group';

//---OT Editor
$lang['ot_date'] = 'Overtime Date';
$lang['unprocess_ot_with_req'] = 'Unprocess Overtime With Request';
$lang['unprocess_ot_without_req'] = 'Unprocess Overtime Without Request';
$lang['in'] = 'In';
$lang['out'] = 'Out';
$lang['hour'] = 'Hour';
$lang['pre_begin'] = 'Pre Begin';
$lang['pre_end'] = 'Pre End';
$lang['post_begin'] = 'Post Begin';
$lang['post_end'] = 'Post End';

//benefit editor
$lang['benefit_date'] = 'Benefit Date';
$lang['deduction'] = 'Deduction';
$lang['deduction_date'] = 'Deduction Date';

//permit editor
$lang['permit_date'] = 'Permit Date';
$lang['permit_id'] = 'Permit ID';

//leave editor
$lang['leave_id'] = 'Leave ID';
$lang['leave_date'] = 'Leave Date';
$lang['leave_revision_date'] = 'Leave Revision Date';
$lang['leave_before'] = 'Leave Before Revision';

//announcement
//nothing

// Label Search
$lang['search_salary_type'] = 'Search Salary Type';
$lang['search_employee'] = 'Search Employee';
$lang['select_attendance_group'] = 'Select Attendance Group';
$lang['select_emp_class'] = 'Select Employee Class';

//-------------------------------BUTTON---------------------------------------
$lang['add'] = 'Add';
$lang['view'] = 'View';
$lang['view_module'] = 'View Module';
$lang['edit'] = 'Edit';
$lang['delete'] = 'Delete';
$lang['approve'] = 'Approve';
$lang['reject'] = 'Reject';
$lang['confirm'] = 'Confirm';
$lang['cancel'] = 'Cancel';
$lang['back'] = 'Back';
$lang['submit'] = 'Submit';
$lang['save'] = 'Save';
$lang['process'] = 'Process';
$lang['print'] = 'Print';
$lang['close'] = 'Close';
$lang['add_date'] = 'Add Date';
$lang['dwonload template'] = 'DWONLOAD TEMPLATE';
$lang['choose file'] = 'Choose File';
$lang['import'] = 'Import';


//-------------------------------GENERAL---------------------------------------
$lang['to'] = 'To';
$lang['name'] = 'Name';
$lang['history_id'] = 'History ID';
$lang['history_date'] = 'History Date';
$lang['trans_date'] = 'Transaction Date';
$lang['effective_date'] = 'Effective Date';
$lang['history_notes'] = 'History Notes';
$lang['active_date'] = 'Active Date';
$lang['created_date'] = 'Created Date';
$lang['created_by'] = 'Created By';
$lang['modify_date'] = 'Modify Date';
$lang['modify_by'] = 'Modify By';
$lang['approved_by'] = 'Approved By';
$lang['approval_date'] = 'Approval Date';
$lang['start_date'] = 'Start Date';
$lang['end_date'] = 'End Date';
$lang['hired_date'] = 'Hired Date';
$lang['detail_date'] = 'Date Detail';
$lang['process_date'] = 'Process Date';
$lang['terminated_date'] = 'Terminated Date';
$lang['training_start_date'] = 'Training Start Date';
$lang['training_end_date'] = 'Training End Date';
$lang['cut_off_date'] = 'Cut Off Date';
$lang['date'] = 'Date';
$lang['time'] = 'Time';
$lang['notes'] = 'Notes';

$lang['wage'] = 'Wage';
$lang['salary'] = 'Salary';
$lang['amount'] = 'Amount';
$lang['val'] = 'Value';
$lang['att'] = 'Attendance';
$lang['unprocessed'] = 'Unprocessed';
$lang['approved'] = 'Approved';
$lang['rejected'] = 'Rejected';
$lang['cancelled'] = 'Cancelled';
$lang['created'] = 'Created';
$lang['needs_approval'] = 'Needs Approval';
$lang['Request Approved'] = 'Request Approved';
$lang['Request Rejected'] = 'Request Rejected';
$lang['Request Cancelled'] = 'Request Cancelled';
$lang['Request Created'] = 'Request Created';
$lang['Request Needs Approval'] = 'Request Needs Approval';
$lang['all'] = 'All';
$lang['all_status'] = 'All Status';
$lang['filter'] = 'Filter';
$lang['clear'] = 'Clear';
$lang['action'] = 'Action';
//$lang['event_id'] = 'Event ID';
$lang['event_type'] = 'Event Type';
$lang['event_name'] = 'Event Name';
$lang['event_approval'] = 'Event Approval';
$lang['email'] = 'Email';
$lang['general_email'] = 'General Email';
$lang['salary_email'] = 'Salary Email';
//$lang['user_id'] = 'User ID';
$lang['shift_id'] = 'Shift ID';
$lang['description'] = 'Description';
$lang['active'] = 'Active';
$lang['exclude'] = 'Exclude';
$lang['exclude_process'] = 'Exclude Process';
$lang['status_approval'] = 'Status Approval';
$lang['reason'] = 'Reason';
$lang['sanction'] = 'Sanction';
$lang['autonumber'] = 'Auto Number';
$lang['remarks'] = 'Remarks';
$lang['template_remarks'] = 'Word contain symbol @ cannot be changed';
$lang['dont_change_component'] = 'Components that do not change';
$lang['exclude_filter_notes'] = 'Leave empty to exclude this filter';
$lang['exclude_security'] = 'Exclude Security';

$lang['server_address'] = 'Server Address';
$lang['database_id'] = 'Database ID';
$lang['database_name'] = 'Database Name';
$lang['database_username'] = 'Database Username';
$lang['database_password'] = 'Database Password';

$lang['select'] = 'Select';
$lang['select_file_picture'] = 'Select File (PICTURE)';
$lang['select_file_excel'] = 'Select File (EXCEL)';
$lang['choose_file'] = 'Choose File';
$lang['attachment'] = 'Attachment';
$lang['attach_ben_info'] = 'Rules Attach File : Max 5 item (size 1MB/item)';
$lang['attach_info'] = 'Only Attach File Using Specified Template';
$lang['attach_error_1'] = 'Invalid File Type/Format';
$lang['attach_error_2'] = 'File Not Found';
$lang['attach_error_3'] = 'File Not Selected';
$lang['download_template'] = 'Download Template';
$lang['departure_date'] = 'Departure Date';
$lang['return_date'] = 'Return Date';
$lang['destination_city'] = 'Destination City';
$lang['passenger'] = 'Passenger';
$lang['necessity'] = 'Necessity';
$lang['destination_ben_info'] = '*) Choose the destination city according to the branch city at the beginning of the work placement';
$lang['return'] = 'Return';
$lang['one_way'] = 'One Way';
$lang['airplane'] = 'Airplane';
$lang['train'] = 'Train';
$lang['travel'] = 'Travel/Bus';
$lang['select_passenger'] = 'Select Passenger';
$lang['passenger_ben_info'] = '*) If the passenger\'s name is not available, first fill the family data in Master Employee menu';
$lang['remaining_back_to_hometown'] = 'Remaining Back To Hometown';
$lang['attach_ben_label_back_to_hometown'] = 'Document per Passenger';

$lang['event_filter'] = 'Event Filter';
$lang['clear_filter'] = 'Clear Filter';
$lang['filter_division'] = 'Filter Division';
$lang['filter_branch'] = 'Filter Branch';
$lang['filter_data'] = 'Filter Data';
$lang['filter_level'] = 'Filter Level';
$lang['filter_type'] = 'Filter Emp Type';
$lang['duty'] = 'Dinas';

$lang['leave_adjust'] = 'Leave Adjust';
$lang['set_config'] = 'Set Config';
$lang['duplicate'] = 'Duplicate';
$lang['year_of_service'] = 'Year Of Service';
$lang['additional_leave'] = 'Additional Leave';
$lang['leave_limit'] = 'Leave Limit';
$lang['maximal_consecutive_leave'] = 'Maximal Consecutive Leave';
$lang['minimal_time_limit'] = 'Minimal Time Limit';
$lang['maximal_time_limit'] = 'Maximal Time Limit';
$lang['company_name'] = 'Company Name';
$lang['company_address'] = 'Company Address';
$lang['head_name'] = 'Head Name';
$lang['headLevel'] = 'Head Level';
$lang['active_date'] = 'Active Date';
$lang['created_date'] = 'Created Date';
$lang['action'] = 'Action';

$lang['calendar_security'] = 'Calendar Security';
$lang['calendar_per_user'] = 'Calendar Per User';
$lang['EnableOvertimeRequest'] = 'Enable Overtime Request';
$lang['calendar_multiple_user'] = 'Calendar Multiple User';
$lang['calendar_multiple_user_by_group'] = 'Calendar Multiple User By Group';
$lang['flexible_shift'] = 'Flexible Shift';
$lang['fixed_shift'] = 'Fixed Shift';
$lang['date_type'] = 'Date Type';
$lang['user_id_employee'] = 'User ID Employee';
$lang['check_time'] = 'Check Time';
$lang['manual_attendance'] = 'Manual Attendance';
$lang['payroll_benefit_status'] = 'Payroll Benefit Status';

$lang['cut_off_date'] = 'Cut Off Date';
$lang['max_salary_bpjs_ks'] = 'Maximum Salary BPJS KS';
$lang['max_salary_bpjs_jp'] = 'Maimum Salary BPJS JP';
$lang['salary_period'] = 'Salary Period';
$lang['exclude_termination'] = 'Exclude Termination';
$lang['leave_empty_to_view'] = '(Leave Empty To view All Employee)';
$lang['leave_empty_to_exclude'] = '(Leave Empty To Exclude This Filter)';
$lang['branch_id'] = 'Branch ID';
$lang['group_id'] = 'Group ID';
$lang['employee_level_id'] = 'Employee Level ID';
$lang['minimal_late_filter'] = 'Minimal Late Filter';
$lang['employee_type_id'] = 'Employee Type ID';
$lang['department_id'] = 'Department ID';
$lang['division_id'] = 'Division ID';
$lang['salary_type_id'] = 'Salary Type ID';
$lang['announcement_id'] = 'Announcement ID';
$lang['total_late_last_30'] = 'Total Late (Last 30 Days)';
$lang['total_sick_last_30'] = 'Total Sick (Last 30 Days)';
$lang['total_permit_last_30'] = 'Total Permit (Last 30 Days)';
$lang['total_alpa_last_30'] = 'Total Alpa (Last 30 Days)';
$lang['salary_division_id'] = 'Salary Division ID';
$lang['user_id'] = 'User ID';
$lang['salary_slip'] = 'Salary Slip';
$lang['salary_slip_a4'] = 'Salary Slip A4';
$lang['salary_summary_monthly'] = 'Salary Summary Monthly';
$lang['salary_summary_monthly_excel'] = 'Salary Summary Monthly (Excel)';
$lang['rekap_salary_monthly'] = 'Rekap Salary Monthly';
$lang['rekap_salary_monthly_excel'] = 'Rekap Salary Monthly (Excel)';
$lang['salary_summary_ex'] = 'Salary Summary Ex';
$lang['salary_summary_ex_excel'] = 'Salary Summary Ex (Excel)';
$lang['rekap_salary_ex'] = 'Rekap Salary Ex';
$lang['rekap_salary_ex_excel'] = 'Rekap Salary Ex (Excel)';
$lang['email_slip'] = 'Email Slip';
$lang['pending_slip'] = 'Pending Slip';
$lang['generate_and_email'] = 'Generate And Email Slip';
$lang['start_date'] = 'Start Date';
$lang['available'] = 'Available';
$lang['selected'] = 'Selected';
$lang['end_date'] = 'End Date';
$lang['begin'] = 'Begin';
$lang['end'] = 'End';
$lang['attendance_date'] = 'Attendance Date';

$lang['overtime_break'] = 'Overtime Break';
$lang['salary_summary_extended'] = 'Salary Summary Extended';
$lang['salary_summary_extended_excel'] = 'Salary Summary Extended (Excel)';
$lang['salary_summary_daily'] = 'Salary Summary Daily';
$lang['salary_summary_daily_excel'] = 'Salary Summary Daily (Excel)';
$lang['rekap_salary_daily'] = 'Rekap Salary Daily';
$lang['rekap_salary_daily_excel'] = 'Rekap Salary Daily (Excel)';
$lang['salary division'] = 'Salary Division';

$lang['salary_summary_spg'] = 'Salary Summary SPG';
$lang['salary_summary_spg_excel'] = 'Salary Summary SPG (Excel)';

$lang['salary_type'] = 'Salary Type';
$lang['select_salary_type'] = 'Select Salary Type';
$lang['salary_group'] = 'Salary Group';
$lang['select_salary_group'] = 'Select Salary Group';
$lang['salary_period'] = 'Salary Period';
$lang['end_date'] = 'End Date';

$lang['user blacklist'] = 'User Blacklist';

//salary bpjs process
$lang['salary_process_list'] = 'Salary Process List';
$lang['last_process'] = 'Last Process';
$lang['payroll_date'] = 'Payroll Date';
$lang['lock_and_set'] = 'Lock & Set';
$lang['unlock'] = 'Unlock';

$lang['sal_period'] = 'Salary Period (mm/yyyy)';
$lang['salary_bpjs_ks'] = 'Salary BPJS KS';
$lang['salary_bpjs_ks_excel'] = 'Salary BPJS KS (Excel)';
$lang['salary_bpjs_ktn'] = 'Salary BPJS KTN';
$lang['salary_bpjs_ktn_excel'] = 'Salary BPJS KTN (Excel)';
$lang['bpjs_ks_mutation'] = 'BPJS KS Mutation';
$lang['bpjs_ks_mutation_excel'] = 'BPJS KS Mutation (Excel)';
$lang['bpjs_ktn_mutation'] = 'BPJS KTN Mutation';
$lang['bpjs_ktn_mutation_excel'] = 'BPJS KTN Mutation (Excel)';
$lang['bpjs_ktn_termination'] = 'BPJS KTN Termination';
$lang['bpjs_ktn_termination_excel'] = 'BPJS KTN Termination (Excel)';
$lang['salary_loan'] = 'Salary Loan';
$lang['salary_loan_excel'] = 'Salary Loan (Excel)';
$lang['salary_loan_rekap'] = 'Salary Loan Rekap';
$lang['salary_loan_rekap_excel'] = 'Salary Loan Rekap (Excel)';

$lang['from_date'] = 'Form Date';
$lang['to_date'] = 'To Date';

$lang['overtime'] = 'Overtime';
$lang['overtime_rekap'] = 'Overtime Rekap';
$lang['overtime_excel'] = 'Overtime (Excel)';
$lang['overtime_excel_ex'] = 'Overtime Mantan (Excel)';
$lang['overtime_rekap_excel'] = 'Overtime Rekap (Excel)';
$lang['overtime_rekap_excel_ex'] = 'Overtime Rekap Mantan (Excel)';

$lang['overtime_limit_day'] = 'Overtime cannot more than 12 hours!';

$lang['overtime_diligence'] = 'Overtime & Diligence Ben';
$lang['overtime_diligence_rekap'] = 'Rekap Overtime & Diligence Ben';
$lang['overtime_diligence_excel'] = 'Overtime & Diligence Ben(Excel)';
$lang['overtime_diligence_rekap_excel'] = 'Rekap Overtime & Diligence Ben(Excel)';
$lang['overtime_diligence_excel_ex'] = 'Overtime & Diligence Ben Ex(Excel)';
$lang['overtime_diligence_rekap_excel_ex'] = 'Rekap Overtime & Diligence Ben Ex(Excel)';

$lang['all_terminate'] = 'All Terminate ( Ex-Employee )';
$lang['none_terminate'] = 'None Terminate';
$lang['print_benefit'] = 'Print Benefit';
$lang['event_type_benefit'] = 'Event Type Benefit';
$lang['benefit_id'] = 'Benefit ID';
$lang['other'] = 'OTHER';
$lang['annual_benefit'] = 'ANNUAL BENEFIT';
$lang['bonus_benefit'] = 'BONUS BENEFIT';
$lang['exclusive_benefit'] = 'EXCLUSIVE BENEFIT';
$lang['benefit_summary'] = 'Benefit Summary';
$lang['benefit_summary_excel'] = 'Benefit Summary (Excel)';
$lang['rekap_benefit'] = 'Rekap Benefit';
$lang['rekap_benefit_excel'] = 'Rekap Benefit (Excel)';

$lang['summary_report'] = 'Summary Report';
$lang['summary_report_excel'] = 'Summary Report (Excel)';

$lang['print_deduction'] = 'Print Deduction';
$lang['print_exclusive_deduction'] = 'Print Exclusive Deduction';
$lang['deduction_id'] = 'Deduction ID';
$lang['terminate'] = 'Terminate';
$lang['report_employee'] = 'Report Employee';
$lang['report employee'] = 'Report Employee';
$lang['report_blacklist'] = 'Report Data Blacklist';
$lang['report blacklist'] = 'Report Data Blacklist';
$lang['employee_report_excel'] = 'Employee Report (Excel)';
$lang['employee_report_exclude_process_excel'] = 'Employee Exclude Process Report (Excel)';
$lang['employee_blacklist_report_excel'] = 'User Blacklist Report(Excel)';
$lang['end_contract'] = 'End Contract';
$lang['start_contract'] = 'Start Contract';
$lang['new_recruitment_training'] = 'NEW RECRUITMENT TRAINING';
$lang['training_extention'] = 'TRAINING EXTENTION';
$lang['contract_1'] = 'CONTRACT 1';
$lang['contract_2'] = 'CONTRACT 2';
$lang['contract_3'] = 'CONTRACT 3';
$lang['period'] = 'Period';

$lang['terminate_date'] = 'Terminate Date';

$lang['tax_period'] = 'Tax Period';
$lang['division_structure'] = 'Division Structure';

$lang['per_date'] = 'Per Date';
$lang['per_date_excel'] = 'Per Date (Excel)';
$lang['absence'] = 'Absence';
$lang['no_absence'] = 'Employee No Absence';
$lang['late_absence'] = 'Employee Late Absence';
$lang['attendance_summary'] = 'Attendance Summary';

$lang['overtime_editor'] = 'Overtime Editor';
$lang['overtime_editor_excel'] = 'Overtime Editor (Excel)';
$lang['overtime_editor_summary'] = 'Overtime Editor Summary';
$lang['overtime_editor_summary_excel'] = 'Overtime Editor Summary (Excel)';
$lang['select_division'] = 'Select Division';
$lang['all_division'] = 'All Division';
$lang['report_absensi'] = 'Report Attendance';
$lang['report_salary'] = 'Report Salary';
$lang['report_salary_daily'] = 'Report Salary Daily';
$lang['report_salary_spg'] = 'Report Salary SPM/SPG';
$lang['report_calculation_bpjs'] = 'Report Calculation BPJS';
$lang['report_salary_bpjs'] = 'Report Salary BPJS';
$lang['report_salary_bpjs_executive'] = 'Report Salary BPJS Executive';
$lang['report_bpjs_37_column'] = 'Report BPJS 37 Column';
$lang['report_loan'] = 'Report Loan';
$lang['report_loan_rekap'] = 'Report Loan Rekap';
$lang['report_overtime'] = 'Report Overtime';
$lang['report_fuelben'] = 'Report Fuel & Parking Ben';
$lang['report_benefit'] = 'Report Benefit';
$lang['report_benefit_by_group'] = 'Report Benefit (By Group)';
$lang['report_deduction'] = 'Report Deduction';
$lang['report_employee'] = 'Report Employee';
$lang['report_end_contract'] = 'Report End Contract';
$lang['report_start_contract'] = 'Report Start Contract';
$lang['report_tax'] = 'Report Tax';
$lang['report_master'] = 'Report Master';
$lang['report_division'] = 'Report Division';
$lang['report_absensi_daily'] = 'Report Daily Attendance ';
$lang['report_leave'] = 'Report Leave';
$lang['report_overtime_editor'] = 'Report Overtime Editor';
$lang['report_overtime_pending'] = 'Report Overtime Editor Pending';
$lang['report compare salary data'] = 'Laporan Perbandingan Data Upah';
$lang['salary_compare'] = 'Bandingkan Upah';
$lang['salary_compare_excel'] = 'Bandingkan Upah(Excel)';

//employe position
$lang['salary_division_name'] = 'Salary Division Name';
$lang['position_id'] = 'Position ID';
$lang['position_name'] = 'Position Name';
$lang['require_approval'] = 'Require Approval';
$lang['employee_position'] = 'Employee Position';

//employee group
$lang['employee_group'] = 'Employee Group';

//shift
$lang['shift_name'] = 'Shift Name';
$lang['check_in_out_time'] = 'Check In/Out Time [24H]';
$lang['break_start_finish_time'] = 'Break Start/Finish Time [24H]';
$lang['scan_begin_end_time'] = 'Scan Begin/End Time [24H]';
$lang['late_tolerance'] = 'Late Tolerance';
$lang['lunch_replacement'] = 'Lunch Replacement';
$lang['shift_fee'] = 'Shift Fee';
$lang['break_duration'] = 'Break Duration';

//status type
$lang['status_type'] = 'Status Type';
$lang['status_id'] = 'Status ID';
$lang['status_name'] = 'Status Name';
$lang['status_rule'] = 'Status Rule';
$lang['color'] = 'Color';
$lang['affect_leave'] = 'Affect Leave';

$lang['date_type_id'] = 'Date Type ID';

//group shift
$lang['group_shift_id'] = 'Group Shift ID';
$lang['group_shift_name'] = 'Group Shift Name';
$lang['changes not affected on earlier date than today'] = 'changes not affected on earlier date than today';

//rule type
$lang['rule_type_id'] = 'Rule Type ID';
$lang['rule_type_name'] = 'Rule Type Name';

//rule
$lang['rule_id'] = 'Rule ID';
$lang['rule_name'] = 'Rule Name';
$lang['rule_type'] = 'Rule Type';
$lang['value'] = 'Value';
$lang['fixed'] = 'Fixed';
$lang['multiplier_of'] = 'Multiplier Of';

//PKP
$lang['tier'] = 'Tier';
$lang['range'] = 'Range';
$lang['rate'] = 'Rate';
$lang['have_npwp'] = 'Have NPWP';
$lang['executive'] = 'Executive';

//unit
$lang['unit_id'] = 'Unit ID';
$lang['unit_name'] = 'Unit Name';
//umk
$lang['umk'] = 'UMK';
$lang['dwonload template umk'] = 'Dwonload Template UMK';
$lang['upload umk'] = 'Upload UMK';
$lang['basic_salary_bpjs'] = 'Basic Salary BPJS';
$lang['upload_umk'] = 'Upload UMK';

//group salary
$lang['group_salary_id'] = 'Group Salary ID';
$lang['employee_group_salary'] = 'Employee Group Salary';

//overtime process
$lang['overtime_process'] = 'Overtime Process';
$lang['report_process'] = 'Report Process';
$lang['spg'] = 'SPG';
$lang['nonspg'] = 'NonSPG';
$lang['period_mm_yyy'] = 'Period (mm/yyy)';
$lang['overtime_process_list'] = 'Overtime Process List';
$lang['locked_date'] = 'Locked Date';
$lang['export_excel'] = 'Export Excel';
$lang['export_ot_bank_excel'] = 'Export Bank Overtime Excel';
$lang['export_ot_bank_excel_ex'] = 'Export Bank Overtime Ex Excel';
$lang['export_diligence_bank_excel'] = 'Export Bank Diligence Ben(Excel)';
$lang['export_diligence_bank_excel_ex'] = 'Export Bank Diligence Ben Ex(Excel)';
$lang['export_perhitungan_pajak'] = 'Export Perhitungan Pajak';

//salary daily process
$lang['salary_daily_process_list'] = 'Salary Daily Process List';
$lang['export_salary_daily_bank_excel'] = 'Export Bank Daily Salary(Excel)';
$lang['export_salary_daily_bank_excel_ex'] = 'Export Bank Daily Salary Ex(Excel)';
$lang['export_rekap_salary_daily_excel'] = 'Export Rekap Daily Salary(Excel)';

//tax process
$lang['process_period'] = 'Process Period';
$lang['export_rekap_fuel_ben_excel'] = 'Export Rekap Fuel&Parking Ben(Excel)';
$lang['export_fuel_ben_bank_excel'] = 'Export Fuel&Parking Ben Bank Tranfer(Excel)';
$lang['export_fuel_ben_bank_excel_ex'] = 'Export Fuel&Parking Ben Bank Tranfer Ex(Excel)';

//-------------------------------ADMINISTRATION-------------------------------------

//configuration
$lang['encryption_type'] = 'Encryption Type';
$lang['import_settings'] = 'Import Settings';
$lang['database_mode'] = 'Database Mode';
$lang['database_type'] = 'Database Type';
$lang['server_ip'] = 'Server IP';
$lang['username'] = 'Username';
$lang['password'] = 'Password';
$lang['database diinput ke master database'] = 'database was inputed to the master database';
$lang['export_debug_settings'] = 'Export Debug Settings';
$lang['email_no_reply_setting'] = 'Email No Reply Setting';
$lang['host_email_no_reply'] = 'Host Email No Reply';
$lang['port_email_no_reply'] = 'Port Email No Reply';
$lang['email_no_reply'] = 'Email No Reply';
$lang['must_be_gmail'] = '(must be gmail)';
$lang['password_email_no_reply'] = 'Password Email No Reply';
$lang['form_email_no_reply'] = 'Form Email No Reply';
$lang['name_email_no_reply'] = 'Name Email No Reply';

//module
$lang['module_id'] = 'Module ID';
$lang['module_name'] = 'Module Name';
$lang['module_type'] = 'Module Type';
$lang['parent'] = 'Parent';
$lang['parent_id'] = 'Parent ID';
$lang['parent_module'] = 'Parent Module';
$lang['last'] = 'Last';
$lang['first'] = 'First';
$lang['after'] = 'After';
$lang['controller'] = 'Controller';
$lang['separator_after'] = 'Separator After';

//role
$lang['check if this role to view company statistic'] = '(Check If This Role To View Company Statistic)';
$lang['role_id'] = 'Role ID';
$lang['is_hrd'] = 'Is HRD';
$lang['is_all_division'] = 'Is All Division';
$lang['type'] = 'Type';

//config approval
$lang['config_id'] = 'Config ID';
$lang['employee_division'] = 'Employee Division';
$lang['approve_level'] = 'Approve Level';
$lang['work_group'] = 'Work Group';
$lang['edit_user'] = 'EditUser';

$lang['user_id_approval'] = 'User ID Approval';
$lang['change to user approval'] = 'Change to User Approval';
$lang['transaction_date'] = 'Transaction Date';

//database
$lang['database_code'] = 'Database Code';
$lang['server'] = 'Server';
$lang['last_update_date'] = 'Last Update Date';

$lang['debug'] = 'Debug';
$lang['destination'] = '(Destination)';
$lang['card_number'] = 'Card Number';
$lang['no_rek'] = 'No Rek';

//Event
$lang['OVERTIME'] = 'OVERTIME';

//EmployeeView
$lang['registration_date'] = 'Registration Date';
$lang['start_contract_date'] = 'Contract Start Date';
$lang['end_contract_date'] = 'Contract End Date';
$lang['permanent_date'] = 'Permanent Date';
$lang['promotion_date2'] = 'Promotion Date';
$lang['termination_date'] = 'Termination Date';

//Tambah Menu MonitoringWA
$lang['monitoring whatsapp'] = 'Monitoring WA';
$lang['download slip gaji'] = 'Download Salary Slip';

//Report Salary
$lang['whatsapp_slip'] = 'Whatsapp Slip';
$lang['generate_and_whatsapp'] = 'Generate And Whatsapp';
$lang['cancel_whatsapp'] = 'Cancel Whatsapp';

$lang['component'] = 'Component';


$lang['component_id'] = 'ComponentID';
$lang['component_name'] = 'Component';
$lang['component_formula'] = 'Component Formula';

$lang['processed_by_gA'] = 'Processed By GA';

$lang['transportation'] = 'Transportation';

$lang['name_email_ga'] = 'Email GA';
