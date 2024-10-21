<?php
//-------------------------------TRANSACTION MESSAGE---------------------------------------
$lang['success_created'] = 'Transaksi berhasil dibuat.';
$lang['success_updated'] = 'Transaksi berhasil diubah.';
$lang['success_deleted'] = 'Transaksi berhasil dihapus.';
$lang['success_imported'] = 'Transaksi berhasil diimport.';
$lang['success_updated_password'] = 'Kata Sandi berhasil diganti.';
$lang['success_updated_user_email'] = 'Surel berhasil diganti.';
$lang['warning_registration'] = 'Peringatan. Ada user lama dengan identitas yang sama.';
$lang['warning_imported'] = 'Ada data karyawan yang tidak berhasil diimport.';
$lang['failed_created'] = 'Transaksi gagal dibuat.';
$lang['failed_updated'] = 'Transaksi gagal diubah.';
$lang['failed_deleted'] = 'Transaksi gagal diedit.';
$lang['failed_imported'] = 'Transaksi gagal diimport.';
//$lang['failed_registration'] = 'Registration failed. There are active user with the same identity.';
$lang['not_found'] = 'Data tidak ditemukan.';
$lang['invalid_database_name'] = 'Database sumber dan database tujuan berbeda.';
$lang['invalid_connection'] = 'Koneksi gagal terhubung.';
$lang['submit_confirm'] = 'Apakah anda ingin mengirim transaksi ini?.';
$lang['submit_approve'] = 'Apakah anda ingin menyetujui transaksi ini?.';
$lang['submit_reject'] = 'Apakah anda ingin menolak transaksi ini?.';
$lang['del_confirm'] = 'Apakah anda ingin menghapus transaksi ini?.';
$lang['print_confirm'] = 'Apakah anda ingin mencetak transaksi ini?.';
$lang['please_fill'] = 'Harap isi baris detail.';
$lang['change_password_confirm'] = 'Apakah anda ingin mengubah kata sandi ini?.';
$lang['process_confirm'] = 'Apakah anda ingin proses transaksi ini?.';
$lang['lock_confirm'] = 'Apakah anda ingin mengunci transaksi ini?';
$lang['unlock_confirm'] = 'Apakah anda ingin membuka transaksi ini?';
$lang['unlock_success'] = 'Transaksi berhasil dibuka';
$lang['lock_success'] = 'Transaksi berhasil di kunci';
$lang['process_contract_confirm'] = 'Apakah anda yakin untuk proses kontrak?.';
$lang['please_wait'] = 'Mohon Tunggu';

//-------------------------------VALIDATION MESSAGE---------------------------------------
$lang['empty_selected_permit_date'] = 'Belum ada tanggal yang dipilih.';
$lang['empty_notes'] = 'Catatan wajib diisi.';
$lang['empty_status_type'] = 'Status Type wajib diisi.';
$lang['exist_permit_date'] = 'Sudah ada izin / dinas yang dibuat ditanggal yang dipilih.';
$lang['exist_leave'] = 'Sudah ada cuti yang dibuat ditanggal yang dipilih ';
$lang['exist_permit'] = 'Sudah ada izin yang dibuat ditanggal yang dipilih ';
$lang['exist_status_date'] = 'Sudah ada status yang dibuat ditanggal yang dipilih ';

$lang['revisi_leave_before_date'] = 'Tidak bisa menrevisi cuti hari ini / yang sudah lewat';
$lang['leave_revision_more_than_old'] = 'Revisi cuti tidak bisa lebih banyak dari permintaan awal';

$lang['empty_selected_leave_date'] = 'Belum ada tanggal yang dipilih.';
$lang['revision_leave_error'] = 'Tanggal revisi cuti tidak boleh lebih banyak dari tanggal cuti sebelumnya';
$lang['no_data_change'] = 'Simpan gagal, tidak ada perubahan data';

$lang['revision_permit_error'] = 'Tanggal revisi izin tidak boleh lebih banyak dari tanggal izin sebelumnya';
$lang['permit_revision_delete'] = 'Tidak bisa menghapus izin yang di revisi';

$lang['sick_error'] = 'Sakit tanpa surat tidak bisa lebih dari 1 hari dalam sebulan';

$lang['error_KTP'] = 'KTP harus 16 digit';
//-------------------------------TITLE---------------------------------------
$lang['title'] = 'Judul';
$lang['dashboard'] = 'Dashboard';
$lang['ess'] = 'ESS (Employee Self Service)';
$lang['hss'] = 'HSS (Head Self Service)';
$lang['profile'] = 'Profil';
$lang['change profile'] = 'Rubah Profil';
$lang['administration'] = 'Administrasi';
$lang['configuration'] = 'Konfigurasi';
$lang['reset email and password'] = 'Ubah Email & Kata sandi';
$lang['open lock salary process'] = 'Buka Lock Proses Penggajian';
$lang['module'] = 'Modul';
$lang['role'] = 'Wewenang';
$lang['authorization'] = 'Otoritasi';
$lang['config approval'] = 'Persetujuan Konfig';
$lang['user approval'] = 'Persetujuan Konfig Spesial';
$lang['activity log'] = 'Aktivitas Log';
$lang['database'] = 'Database';
$lang['debug database'] = 'Debug database';
$lang['user correction'] = 'Koreksi User';
$lang['insert bulk benefit deduction'] = 'Impor Massal Manfaat & Potongan';
$lang['import employee status history'] = 'Impor Massal Employee Status History';
$lang['import absent hadirr'] = 'Import Absensi Hadirr';

$lang['master hrd'] = 'Master HRD';
$lang['employee'] = 'Karyawan';
$lang['employee_stat'] = 'Status Karyawan';
$lang['department'] = 'Departemen';
$lang['division'] = 'Divisi';
$lang['salary division'] = 'Divisi Penggajian';
$lang['position'] = 'Posisi';
$lang['select_position'] = 'Pilih Posisi';
$lang['position applicant'] = 'Posisi Pelamar';
$lang['branch'] = 'Cabang';
$lang['select_branch'] = 'Pilih Cabang';
$lang['group'] = 'Grup';
$lang['group_name'] = 'Nama Grup';
$lang['attendance group'] = 'Grup Absensi';
$lang['group salary'] = 'Grup Penggajian';
$lang['from_attendance_machine'] = 'Dari Mesin Absensi';
$lang['type'] = 'Tipe';
$lang['level'] = 'Tingkatan';
$lang['class'] = 'Kelas';
$lang['event'] = 'Peristiwa';
$lang['hamlet'] = 'Desa';
$lang['district'] = 'Wilayah';
$lang['city'] = 'Kota';
$lang['state'] = 'Provinsi';
$lang['choose_city'] = 'Pilih Kota';
$lang['required_city'] = '[Personal] Wajib pilih kota';
$lang['choose_state'] = 'Pilih Provinsi';
$lang['required_state'] = '[Personal][Alamat Saat Ini] Wajib pilih provinsi';
$lang['required_id_card_state'] = '[Personal][Alamat Sesuai KTP] Wajib pilih provinsi';
$lang['choose_hamlet'] = 'Pilih Desa';
$lang['choose_district'] = 'Pilih Wilayah';
$lang['required_district'] = '[Personal] Wajib pilih wilayah';
$lang['medical facility'] = 'Fasilitas Kesehatan';
$lang['choose_branch'] = '---Pilih Cabang---';
$lang['choose city'] = '---Pilih Kota---';
$lang['hamlet_id'] = 'ID Desa';
$lang['hamlet_name'] = 'Nama Desa';
$lang['district_id'] = 'ID Wilayah';
$lang['district_name'] = 'Nama Wilayah';
$lang['state_id'] = 'ID Provinsi';
$lang['capital_city'] = 'Ibu Kota';
$lang['med_facility_id'] = 'ID Fasilitas Kesehatan';
$lang['med_facility_name'] = 'Nama Fasilitas Kesehatan';

$lang['master attendance'] = 'Master Absensi';
$lang['fixed shift'] = 'Shift Kerja Tetap';
$lang['flexible shift'] = 'Shift Kerja Fleksibel';
$lang['status type'] = 'Tipe Status';
$lang['date type'] = 'Tipe Hari Kerja';
$lang['group shift'] = 'Grup Shift';
$lang['master payroll'] = 'Master Daftar Upah';
$lang['salary type'] = 'Tipe Upah';
$lang['rule type'] = 'Tipe Aturan';
$lang['rules'] = 'Aturan';
$lang['category pph'] = 'Kategori PPH';
$lang['pkp'] = 'Penghasilan Kena Pajak';
$lang['ptkp'] = 'Penghasilan Tidak Kena Pajak';
$lang['amount_ptkp'] = 'Jumlah PTKP';
$lang['npwp'] = 'Nomor Pokok Wajib Pajak';
$lang['npp'] = 'NPP';
$lang['unit'] = 'Satuan';
$lang['upah min. kota'] = 'Upah Minimum Kota';
$lang['loan type'] = 'Tipe Pinjaman';
$lang['payment_start_date'] = 'Tanggal Mulai Pembayaran';

$lang['transaction'] = 'Transaksi';
$lang['latest_transaction'] = 'Transaksi Terahkir';
$lang['trans config company'] = 'Transaksi Konfigurasi Perusahaan';
$lang['trans config leave'] = 'Transaksi Konfigurasi Cuti';
$lang['trans config bpjs'] = 'Transaksi Konfigurasi BPJS';
$lang['calendar per user'] = 'Kalender Per User';
$lang['calendar multiple user'] = 'Kalender Multi User';
$lang['calendar multiple user by group'] = 'Kalender Multi User dengan group';
$lang['calendar security'] = 'Kalender Sekuriti';
$lang['manual attendance per user'] = 'Absensi Manual Per User';
$lang['manual attendance per division'] = 'Absensi Manual Per Division';
$lang['manual status'] = 'Manual Status';
$lang['status editor'] = 'Editor Status';
$lang['attendance import'] = 'Import Absensi';
$lang['overtime break'] = 'Istirahat Lembur';
$lang['overtime editor'] = 'Editor Lembur';
$lang['overtime import'] = 'Import Lembur';
$lang['overtime process'] = 'Proses Lembur Dan Tunj. Kerajinan';
$lang['benefit editor'] = 'Editor Manfaat';
$lang['permit editor'] = 'Editor Izin';
$lang['leave editor'] = 'Editor Cuti';
$lang['announcement'] = 'Pengumuman';
$lang['leave adjustment'] = 'Penyesuaian Cuti';
$lang['trans_config_leave'] = 'Trans Konfigurasi Cuti ';
$lang['trans_config_bpjs'] = 'Trans Konfigurasi BPJS';
$lang['manual_attendance_per_user'] = 'Absensi Manual Per User';
$lang['manual_attendance_division'] = 'Absensi Manual Per Divisi';
$lang['status_editor'] = 'Editor Status';
$lang['overtime_import'] = 'Import Lembur';
$lang['attendance_import'] = 'Import Absensi';
$lang['overtime_break'] = 'Istirahat Lembur';
$lang['overtime_editor'] = 'Editor Lembur';
$lang['imported_by'] = 'Diimport Oleh';
$lang['imported_form'] = 'Diimport Pada';
$lang['select_department'] = 'Pilih Departemen';
$lang['select_group'] = 'Pilih Grup';

$lang['application for revision leave'] = 'Pengajuan Revisi Cuti';

$lang['application for revision permit'] = 'Pengajuan Revisi Izin';

$lang['application'] = 'Lamaran Kerja';
$lang['registration'] = 'Registrasi';
$lang['training extension'] = 'Perpanjangan Masa Pelatihan';
$lang['extend'] = 'Perpanjang';
$lang['permanent / contract recruitment'] = 'Penerimaan Karyawan Tetap / Kontrak';
$lang['employee data changes'] = 'Perubahan Data Karyawan';
$lang['employee config'] = 'Konfigurasi Karyawan';
$lang['warning letter'] = 'Surat Peringatan';
$lang['promotion / demotion'] = 'Promosi / Demosi';
$lang['mutation'] = 'Mutasi';
$lang['termination'] = 'Terminasi';
$lang['employment verification letter (skp)'] = 'Surat Keterangan Penghasilan';
$lang['certificate of employment (skk)'] = 'Surat Keterangan Kerja';
$lang['salary adjustment'] = 'Penyesuaian Upah';
$lang['salary bpjs adjustment'] = 'Penyesuaian Upah BPJS';
$lang['salary bpjs executive adjustment'] = 'Penyesuaian Upah BPJS Eksekutif';
$lang['import salary'] = 'Impor Upah';
$lang['import salary bpjs'] = 'Impor Upah BPJS';
$lang['import salary spg'] = 'Impor Upah SPM/SPG';
$lang['import benefit deduction'] = 'Impor `Pengurangan Manfaat`';
$lang['import benefit deduction all event type'] = 'Impor `Pengurangan Manfaat` Semua Peristiwa';
$lang['annual benefit'] = 'Tunjangan Tahunan';
$lang['bonus benefit'] = 'Tunjangan Bonus';
$lang['regular benefit'] = 'Tunjangan Umum';
$lang['exclusive benefit'] = 'Tunjangan Eksklusif';
$lang['regular deduction'] = 'Potongan Umum';
$lang['exclusive deduction'] = 'Potongan Eksklusif';
$lang['loan'] = 'Pinjaman';
$lang['loan payment'] = 'Pembayaran Pinjaman';
$lang['import salary'] = 'Impor Upah';
$lang['account receivable'] = 'Piutang';

$lang['import_pph21'] = 'Impor PPH21';

$lang['event approval'] = 'Persetujuan Peristiwa';

$lang['fuel and parking benefit process'] = 'Proses Tunjangan Bensin & Parkir';
$lang['salary and tax process'] = 'Proses Gaji & Pajak';
$lang['salary bpjs executive process'] = 'Proses Perhitungan BPJS Eksekutif';
$lang['salary bpjs process'] = 'Proses Perhitungan BPJS Umum';
$lang['salary daily process'] = 'Proses Perhitungan Upah Harian';
$lang['salary process'] = 'Proses Perhitungan Upah';
$lang['tax process'] = 'Proses Perhitungan Pajak';
$lang['tax_process_list'] = 'Daftar Proses Perhitungan Pajak';

$lang['report'] = 'Laporan';
$lang['report_absensi_personal'] = 'Laporan Absensi Pribadi';
$lang['report_ho'] = 'Laporan Kantor Pusat';
$lang['report_salary'] = 'Laporan Upah';
$lang['report_salary daily'] = 'Laporan Upah Harian';
$lang['report_salary spg'] = 'Laporan Upah SPM/SPG';
$lang['report_calculation bpjs'] = 'Laporan Perhitungan BPJS';
$lang['report_salary bpjs'] = 'Laporan Upah BPJS Umum';
$lang['report_salary bpjs executive'] = 'Laporan Upah BPJS Eksekutif';
$lang['report_bpjs 37 column'] = 'Laporan BPJS 37 Kolom';
$lang['report_salary daily process'] = 'Laporan Perhitungan Upah harian';
$lang['report_tunjangan prestasi'] = 'Laporan Tunjangan Prestasi';
$lang['report_attendance'] = 'Laporan Absensi';
$lang['report_overtime'] = 'Laporan Lembur & Tunj Kerajinan';
$lang['report_fuel ben'] = 'Laporan Tunj.Bensin & Parkir';
$lang['report_leave'] = 'Laporan Cuti';
$lang['report_overtime editor'] = 'Laporan Lembur Editor';
$lang['report_pending overtime editor'] = 'Laporan Lembur Editor (Pending)';
$lang['report_benefit'] = 'Laporan Manfaat';
$lang['report_benefit by group'] = 'Laporan Manfaat (Per Group)';
$lang['report_deduction'] = 'Laporan Potongan';
$lang['report_general'] = 'Laporan Umum';
$lang['report_employee'] = 'Laporan Data Karyawan';
$lang['report_tax'] = 'Laporan Pajak';
$lang['report_other'] = 'Laporan Lain-lain';
$lang['report_master'] = 'Laporan Master Data';
$lang['report_rules'] = 'Laporan Aturan';
$lang['salary slip'] = 'Laporan Slip Gaji';
$lang['report_absensi daily'] = 'Laporan Absensi Harian';
$lang['report_end contract'] = 'Laporan Data Habis Kontrak';
$lang['report_start contract'] = 'Laporan Data Mulai Kontrak';
$lang['report_termination'] = 'Laporan Terminasi';
$lang['report_mutation'] = 'Laporan Mutasi Karyawan';
$lang['report_employee get sp'] = 'Laporan Karyawan Kena SP';
$lang['report_promotion'] = 'Laporan Promosi / Demosi Karyawan';
$lang['report_division'] = 'Laporan Divisi';
$lang['report_loan'] = 'Laporan Hutang';
$lang['report_loan rekap'] = 'Laporan Rekap Hutang';

$lang['manual book'] = 'Buku Petunjuk';
$lang['sign in'] = 'Masuk';
$lang['sign out'] = 'Keluar';

//-------------------------------EVENT TYPE---------------------------------------
$lang['tunjangan prestasi'] = 'Tunjangan Prestasi';

//-------------------------------LABEL--------------------------------------------

//trans_config_company
$lang['company_name'] = 'Nama Perusahaan';
$lang['company_address'] = 'Alamat Perusahaan';
$lang['head_name'] = 'Nama Pimpinan Perusahaan';
$lang['head_level'] = 'Jabatan';
$lang['max_contract_period'] = 'Periode maksimal masa kerja karyawan kontrak';
$lang['min_rehired_interval'] = 'Jeda Waktu Minimum Penerimaan Ulang Mantan Karyawan';
$lang['min_third_contract_rehired_interval'] = 'Jeda Waktu Minimum Penerimaan Karyawan Kontrak Ketiga';
$lang['back_to_hometown_limit'] = 'Batas Pulang Kampung';
$lang['enable_ot_req'] = 'Jabatan';
$lang['trans_config_company'] = 'Trans Konfigurasi Perusahaan';


//trans_config_bpjs
$lang['max_salary_plafond_bpjs_ks'] = 'Batas Atas Upah BPJS KS';
$lang['max_salary_plafond_bpjs_jp'] = 'Batas Atas Upah BPJS JP';
$lang['rate_bpjs_jkk'] = 'Potongan BPJS JKK (%)';
$lang['rate_bpjs_jkm'] = 'Potongan BPJS JKM (%)';
$lang['rate_bpjs_jht'] = 'Potongan BPJS JHT (%)';
$lang['rate_bpjs_jp'] = 'Potongan BPJS JP (%)';
$lang['rate_bpjs_ks'] = 'Potongan BPJS KS (%)';
$lang['rate bpjs jkk'] = 'Nilai BPJS JKK (%)';
$lang['rate bpjs jkm'] = 'Nilai BPJS JKM (%)';
$lang['rate bpjs jht'] = 'Nilai BPJS JHT (%)';
$lang['rate bpjs jp'] = 'Nilai BPJS JP (%)';
$lang['rate bpjs ks'] = 'Nilai BPJS KS (%)';
//dashboard
$lang['today_notif'] = 'Notifikasi Hari Ini';
$lang['nothing_notif'] = 'Tidak Ada Notifikasi Untuk Anda Hari Ini';
$lang['pending_req_in'] = 'Permintaan Approval Yang Belum Diproses';
$lang['pending_req_out'] = 'Permintaan Transaksi Yang Belum Diproses';
$lang['pending_req_ot_editor'] = 'Lembur yang belum diverifikasi';
$lang['warning_emp_no_absent'] = 'Peringatan Karyawan Tidak Ada Absent';
$lang['personal_stat'] = 'Statistik Pribadi';
$lang['company_stat'] = 'Statistik Perusahaan';
$lang['total_active_employee'] = 'Total Karyawan Aktif Bulan Ini';
$lang['total_new_applicant'] = 'Total Pelamar Bulan Ini';
$lang['total_new_registration'] = 'Total Penerimaan Karyawan Baru Bulan Ini';
$lang['kontrak pensiun'] = 'Kontrak Pensiun';
$lang['pelatihan'] = 'Pelatihan';
$lang['tetap'] = 'Tetap';
$lang['kontrak'] = 'Kontrak';
$lang['magang'] = 'Magang';
$lang['total_new_recruitment'] = 'Total Pengangkatan Karyawan Baru Bulan Ini';
$lang['contract'] = 'Kontrak';
$lang['permanent'] = 'Tetap';
$lang['total_new_warning_letter'] = 'Total SP Yang Diterbitkan Bulan Ini';
$lang['total_new_promotion'] = 'Total Promosi Karyawan Bulan Ini';
$lang['total_new_mutation'] = 'Total Mutasi Karyawan Bulan Ini';
$lang['total_new_termination'] = 'Total Terminasi Karyawan Bulan Ini';
$lang['total_eof_contract'] = 'Total Karyawan Kontrak Yang Berakhir Bulan Ini';

//att report
$lang['first_in'] = 'Jam Masuk Pertama';
$lang['last_out'] = 'Jam Keluar Terakhir';
$lang['total_late'] = 'Jumlah Terlambat';
$lang['total_sick'] = 'Jumlah Sakit';
$lang['total_permit'] = 'Jumlah Izin';
$lang['total_alpa'] = 'Jumlah Alpa';
$lang['total_ot_this_month'] = 'Total Lembur Bulan Ini (Jam)';

//change profile
$lang['change_pass'] = 'Rubah Kata Sandi';
$lang['current_pass'] = 'Kata Sandi Saat Ini';
$lang['new_pass'] = 'Kata Sandi Yang Baru';
$lang['confirm_pass'] = 'Konfirmasi Kata Sandi Yang Baru';
$lang['change_email'] = 'Rubah Surel';
$lang['current_email'] = 'Surel Saat Ini';
$lang['new_email'] = 'Surel Yang Baru';
$lang['confirm_email'] = 'Konfirmasi Surel Yang Baru';

//config approval
$lang['branch_div_head'] = 'Kepala Divisi Cabang';
$lang['under_division'] = 'Dibawah Divisi';
$lang['under_department'] = 'Dibawah Departemen';
$lang['division_name'] = 'Nama Divisi';
$lang['division_head'] = 'Kepala Divisi';
$lang['department_name'] = 'Nama Departemen';
$lang['department_head'] = 'Kepala Departemen';
$lang['department_vice_head'] = 'Wakil Kepala Departemen';
$lang['div_head'] = 'Kepala Divisi';
$lang['div_vice_head'] = 'Wakil Kepala Divisi';
$lang['interval'] = 'Rentang';
$lang['payroll_method'] = 'Metode Penggajian';
$lang['cash'] = 'Tunai';
$lang['transfer'] = 'Transfer';
$lang['salary_component'] = 'Komponen Upah';
$lang['salary_group'] = 'Grup Upah';
$lang['approval'] = 'Persetujuan';
$lang['approval_user'] = 'User Yang Menyetujui';
$lang['approval_name'] = 'Nama Yang Menyetujui';
$lang['approval_level'] = 'Tingkat Persetujuan';
$lang['approval_history'] = 'Histori Persetujuan';
$lang['approval_date'] = 'Tanggal Persetujuan';
$lang['under_div_or_depart'] = 'Dibawah Divisi/Departemen';
$lang['div_cc_email'] = 'CC Email Divisi';
$lang['processed_date'] = 'Tanggal diproses';
$lang['status'] = 'Status';
//position applicant
$lang['position_applicant_id'] = 'ID Posisi Pelamar';
$lang['position_applicant_name'] = 'Nama Posisi Pelamar';
//branch
$lang['branch_name'] = 'Nama Cabang';
$lang['branch_head'] = 'Kepala Cabang';
$lang['branch_vice_head'] = 'Wakil Kepala Cabang';
$lang['branch_address'] = 'Alamat Cabang';
$lang['company_npwp'] = 'NPWP Perusahaan';
$lang['npwp_group'] = 'NPWP Group';
$lang['user_npwp'] = 'NPWP Pengguna';
$lang['web_api'] = 'Web API';
$lang['branch_phone_area_code'] = 'Kode Area Telepon Cabang';
$lang['branch_phone_number'] = 'Nomor Telepon Cabang';
$lang['overtime_limit'] = 'Batas Waktu Lembur';
//attendance group
$lang['attendance_group_id'] = 'ID Grup Absensi';
$lang['attendance_group_name'] = 'Nama Grup Absensi';
//employee type
$lang['employee_type'] = 'Tipe Karyawan';
$lang['event_id'] = 'Event ID';
$lang['require_end_date'] = 'Membutuhkan Tanggal Akhir Kerja';
//employee level
$lang['employee_level'] = 'Tingkatan Karyawan';
$lang['level_number'] = 'Tingkatan Nomor';
//employee class
$lang['employee_class'] = 'Kelas Karyawan';
$lang['employee_class_id'] = 'ID Kelas Karyawan';
$lang['employee_class_name'] = 'Nama Kelas Karyawan';
$lang['meal_fee'] = 'Uang Makan';
$lang['transport_fee'] = 'Uang Kendaraan';
$lang['insentive_fee'] = 'Uang Insentif';
$lang['present_fee'] = 'Uang Kehadiran';
$lang['diligence_fee'] = 'Uang Kerajinan';
//-------------------------------EVENT-------------------------------------
//employee
$lang['general'] = 'Umum';
$lang['required'] = 'wajib';
$lang['general_info'] = 'Informasi Umum';
$lang['info'] = 'Informasi';
$lang['language'] = 'Bahasa';
$lang['badge_number'] = 'Nomor Pengenal';
$lang['ssn'] = 'BPJS';
$lang['document'] = 'dokumen';
$lang['id_card_number'] = 'Nomor KTP';
$lang['id_tax_number'] = 'Nomor NPWP';
$lang['hired_date_registration'] = 'Tanggal Registrasi';
$lang['hired_date_latest'] = 'Tanggal Registrasi Terakhir';
$lang['promotion_date'] = 'Tanggal Promosi';
$lang['bpjs_info'] = 'Informasi BPJS';
$lang['bpjs_ktn_number'] = 'Nomor BPJS KTN';
$lang['bpjs_ktn_join_date'] = 'Tanggal Bergabung BPJS KTN';
$lang['bpjs_ktn_end_date'] = 'Tanggal Berhenti BPJS KTN';
$lang['bpjs_ks_number'] = 'Nomor BPJS KS';
$lang['bpjs_ks_join_date'] = 'Tanggal Bergabung BPJS KS';
$lang['bpjs_ks_end_date'] = 'Tanggal Berhenti BPJS KS';
$lang['medical_facility_level'] = 'Tingkat Faskes';
$lang['medical_facility_refferal'] = 'Faskes Rujukan Utama';
$lang['medical_facility_dentist'] = 'Faskes Rujukan Utama Untuk Masalah Gigi';
$lang['medical_facility_class1'] = 'Faskes Tingkat 1';
$lang['bank_info'] = 'Informasi Bank';
$lang['bank_account'] = 'Akun Bank';
$lang['bank_name'] = 'Nama Bank';
$lang['bank_branch'] = 'Cabang Bank';
$lang['bank_acc_number'] = 'Nomor Akun Bank';
$lang['insurance_info'] = 'Informasi Asuransi';
$lang['insurance_name'] = 'Nama Asuransi';
$lang['insurance_number'] = 'Nomor Asuransi';
$lang['personal_info'] = 'Informasi Pribadi';
$lang['gender'] = 'Jenis Kelamin';
$lang['male'] = 'Pria';
$lang['m'] = 'L';
$lang['f'] = 'P';
$lang['female'] = 'Wanita';
$lang['husband'] = 'Suami';
$lang['wife'] = 'Istri';
$lang['spouse'] = 'Pasangan';
$lang['child'] = 'Anak';
$lang['birth_place'] = 'Tempat Lahir';
$lang['birth_date'] = 'Tanggal Lahir';
$lang['religion'] = 'Agama';
$lang['nationality'] = 'Kebangsaan';
$lang['passport_number'] = 'Nomor Passport';
$lang['mother_name'] = 'Nama Ibu Kandung';
$lang['id_card_address'] = 'Alamat Sesuai KTP';
$lang['address'] = 'Alamat';
$lang['current_address'] = 'Alamat Saat Ini';
// $lang['rt'] = 'RT';
// $lang['rw'] = 'RW';
$lang['zip_code'] = 'Kode Pos';
$lang['photo'] = 'Foto';
$lang['upload_photo'] = 'Unggah Foto';
$lang['contact_number'] = 'Nomor Kontak';
$lang['mobile'] = 'HP';
$lang['phone'] = 'Telepon Rumah';
// $lang['whatsapp'] = 'Whatsapp';
$lang['additional_info'] = 'Informasi Tambahan';
$lang['additional'] = 'Tambahan';
$lang['blood_type'] = 'Golongan Darah';
$lang['smoking'] = 'Merokok';
$lang['health_condition'] = 'Kondisi Kesehatan';
$lang['interest'] = 'Hobby';
$lang['transport_mode'] = 'Jenis Transportasi';
$lang['car'] = 'Mobil';
$lang['company_car'] = 'Mobil Perusahaan';
$lang['motorcycle'] = 'Motor';
$lang['company_motorcycle'] = 'Motor Perusahaan';
$lang['onfoot'] = 'Berjalan Kaki';
$lang['public_transportation'] = 'Transportasi Umum';
$lang['ref_by'] = 'Direferensikan Oleh';
$lang['emergency_contact_info'] = 'Informasi Kontak Darurat';
$lang['emergency_contact'] = 'Kontak Darurat';
$lang['family_info'] = 'Informasi Keluarga';
$lang['family_card_number'] = 'Nomor Kartu Keluarga';
$lang['upload_family_card'] = 'Unggah Kartu Keluarga';
$lang['history_family_info'] = 'Informasi Data Keluarga';
$lang['marital_status'] = 'Status Perkawinan';
$lang['total_child'] = 'Jumlah Anak';
$lang['not_married'] = 'Tidak Kawin (TK)';
$lang['married'] = 'Kawin (K)';
$lang['hb'] = 'Hidup Berpisah (HB)';
$lang['non_taxable_income_status'] = 'Status PTKP';
$lang['number_of_dependents'] = 'Jumlah Tanggungan';
$lang['detail_family_info'] = 'Detail Informasi Keluarga';
$lang['family_relationship'] = 'Hubungan Keluarga';
$lang['education_info'] = 'Informasi Pendidikan';
$lang['institution'] = 'Institusi';
$lang['degree'] = 'Gelar';
$lang['working_experiences_info'] = 'Informasi Pengalaman Kerja';
$lang['company'] = 'Kantor';
$lang['history_career_info'] = 'Informasi Karir';
$lang['employee_event_info'] = 'Informasi Peristiwa';
$lang['download'] = 'Unduh';
$lang['upload'] = 'Unggah';
$lang['preview'] = 'Pratinjau';
$lang['preview_data'] = 'Pratinjau Data';
$lang['affect_pph'] = 'Mempengaruhi PPH';
$lang['send_email_notification'] = 'Kirim Notifikasi Email';
$lang['template'] = 'Templat';
$lang['select_category_pph'] = 'Pilih Kategori PPH';
$lang['user'] = 'Pengguna';

//ESS/HSS
$lang['year'] = 'Tahun';
$lang['remaining_leave'] = 'Sisa Cuti';
$lang['jan'] = 'Januari';
$lang['feb'] = 'Februari';
$lang['mar'] = 'Maret';
$lang['apr'] = 'April';
$lang['may'] = 'Mei';
$lang['jun'] = 'Juni';
$lang['jul'] = 'Juli';
$lang['aug'] = 'Agustus';
$lang['sep'] = 'September';
$lang['oct'] = 'Oktober';
$lang['nov'] = 'November';
$lang['dec'] = 'Desember';
$lang['january']    = "Januari";
$lang['february']    = "Februari";
$lang['march']        = "Maret";
$lang['april']        = "April";
$lang['mayl']        = "Mei";
$lang['june']        = "Juni";
$lang['july']        = "Juli";
$lang['august']        = "Agustus";
$lang['september']    = "September";
$lang['october']    = "Oktober";
$lang['november']    = "November";
$lang['december']    = "Desember";
$lang['mon'] = 'Sen';
$lang['tue'] = 'Sel';
$lang['wed'] = 'Rab';
$lang['thu'] = 'Kam';
$lang['fri'] = 'Jum';
$lang['sat'] = 'Sab';
$lang['sun'] = 'Min';
$lang['ot'] = 'Lembur';
$lang['ot_req_form'] = 'Form Pengajuan Lembur';
$lang['pre_shift'] = 'Lembur Sebelum Mulai Shift';
$lang['post_shift'] = 'Lembur Sesudah Akhir Shift';
$lang['ben'] = 'Manfaat';
$lang['ben_req_form'] = 'Form Pengajuan Manfaat';
$lang['select_event_type'] = 'Plih Tipe Peristiwa';
$lang['leave'] = 'Cuti';
$lang['leave_req_form'] = 'Form Pengajuan Cuti';
$lang['select_status_type'] = 'Pilih Tipe Status';
$lang['permit'] = 'Izin';
$lang['permit_req_form'] = 'Form Pengajuan Izin';
$lang['duty_req_form'] = 'Form Pengajuan Dinas';
$lang['company_npwp'] = 'NPWP Perusahaan';
$lang['select_user'] = 'Pilih User';
$lang['month'] = 'Bulan';
$lang['months'] = 'Bulanan';
$lang['week'] = 'Minggu';
$lang['weeks'] = 'Mingguan';
$lang['day'] = 'Hari';
$lang['days'] = 'Harian';


//custom
$lang['tax_period'] = 'Masa Pajak';
$lang['tax_year'] = 'Tax Year';
$lang['rectification'] = 'Pembetulan';
$lang['tax_code'] = 'Kode Pajak';
$lang['gross_amount'] = 'Jumlah Bruto';
$lang['number_of_pph'] = 'Jumlah PPH';
$lang['country_code'] = 'Kode Negara';
$lang['number'] = 'Nomor';
$lang['new'] = 'Baru';
$lang['export'] = 'Ekspor';


//custom_error
$lang['error_userid'] = 'User ID Tidak Di Temukan';
$lang['error_npwp_perusahaan'] = 'NPWP Perusahaan Tidak Di Temukan';
$lang['error_nama'] = 'Nama Tidak Di Temukan';
$lang['error_npwp'] = 'NPWP Tidak Di Temukan';
$lang['error_all'] = 'Karyawan Tidak Terdaftar';
$lang['error_1'] = 'Data Karyawan Error';
$lang['error_name'] = 'Data Tidak Dapat Dimasukkan';
$lang['success_name'] = 'Data Berhasil Dimasukkan';
$lang['Entered_name'] = 'Data Dapat Dimasukkan';
$lang['error_period'] = 'Periode Pajak Upload Harus Sama Semua';
$lang['error_period_sudah'] = 'Periode Pajak Upload Sudah Pernah DiProses Dengan User Ini';
$lang['error_npwp_group'] = 'NPWP Group Tidak Sama Dengan Yang Lain';
$lang['error_number'] = 'Transaksi tidak dapat diubah';
$lang['error_empty'] = 'Form tidak boleh kosong';


//applicant
$lang['applicant_form'] = 'Form Pelamar';
$lang['applicant'] = 'Pelamar';
$lang['apply_position'] = 'Posisi Yang Dipilih';
$lang['apply_branch'] = 'Cabang Yang Dipilih';

//registration
$lang['registration_form'] = 'Form Registrasi';
$lang['registration_appr_form'] = 'Form Persetujuan Registrasi';

//training extension
//nothing

//recruitment
//nothing

//employee data changes
//nothing

//employee config
$lang['employee_config_info'] = 'Informasi Konfigurasi Karyawan';
$lang['current_union_cut'] = 'Potongan Serikat Saat Ini';
$lang['union_cut'] = 'Potongan Serikat';
$lang['new_union_cut'] = 'Potongan Serikat Yang Baru';
$lang['current_bpjs_ks'] = 'Potongan BPJS KS Saat Ini (%)';
$lang['new_bpjs_ks'] = 'Potongan BPJS KS Yang Baru (%)';
$lang['current_bpjs_jht'] = 'Potongan BPJS JHT Saat Ini (%)';
$lang['new_bpjs_jht'] = 'Potongan BPJS JHT Yang Baru (%)';
$lang['current_bpjs_jp'] = 'Potongan BPJS JP Saat Ini (%)';
$lang['new_bpjs_jp'] = 'Potongan BPJS JP Yang Baru (%)';
$lang['current_level_ben'] = 'Tunjangan Jabatan Saat Ini';
$lang['new_level_ben'] = 'Tunjangan Jabatan Yang Baru';
$lang['current_duty_ben'] = 'Tunjangan Dinas Saat ini';
$lang['new_duty_ben'] = 'Tunjangan Dinas Yang Baru';
$lang['current_family_ben'] = 'Tunjangan Keluarga Saat Ini';
$lang['new_family_ben'] = 'Tunjangan Keluarga Yang Baru';
$lang['current_oot_ben'] = 'Tunjangan Luar Kota Saat Ini';
$lang['new_oot_ben'] = 'Tunjangan Luar Kota Yang Baru';
$lang['level_ben'] = 'Tunjangan Jabatan';
$lang['duty_ben'] = 'Tunjangan Dinas';
$lang['child_ben'] = 'Tunjangan Anak';
$lang['oot_ben'] = 'Tunjangan Luar Kota';
$lang['achievement_subsidy_ben'] = 'Tunjangan Subsidi Prestasi';
$lang['back_to_hometown_limit'] = 'Batas Pulang Kampung';
$lang['get_fuel_ben'] = 'Dapat Tunjangan Bensin';
$lang['get_parking_ben'] = 'Dapat Tunjangan Parkir';
$lang['exclude_company_bpjs_jp'] = 'Pengecualian BPJS JP Perusahaan';
$lang['current_achievement_subsidy_ben'] = 'Tunjangan Subsidi Prestasi Saat Ini';
$lang['new_achievement_subsidy_ben'] = 'Tunjangan Subsidi Prestasi Yang Baru';
$lang['current_get_fuel_ben'] = 'Dapat Tunjangan Bensin Saat Ini';
$lang['new_get_fuel_ben'] = 'Dapat Tunjangan Bensin Yang Baru';
$lang['current_get_parking_ben'] = 'Dapat Tunjangan Parkir Saat Ini';
$lang['new_get_parking_ben'] = 'Dapat Tunjangan Parkir Yang Baru';
$lang['new_exclude_company_bpjs_jp'] = 'Pengecualian BPJS JP Perusahaan Yang Baru';
$lang['current_exclude_company_bpjs_jp'] = 'Pengecualian BPJS JP Perusahaan Saat Ini';
$lang['current_back_to_hometown_limit'] = 'Batas Pulang Kampung Saat Ini';
$lang['new_back_to_hometown_limit'] = 'Batas Pulang Kampung Yang Baru';

//warning letter
$lang['current_level_warning_letter'] = 'Tingkatan SP Saat Ini';
$lang['new_level_warning_letter'] = 'Tingkatan SP Yang Baru';
$lang['current_sp'] = 'SP Saat ini';
$lang['level_sp'] = 'Tingkat SP';

//promotion/demotion
$lang['current_level'] = 'Tingkatan Saat Ini';
$lang['new_level'] = 'Tingkatan Yang Baru';
$lang['current_division'] = 'Divisi Saat Ini';
$lang['new_division'] = 'Divisi Yang Baru';
$lang['current_position'] = 'Posisi Saat Ini';
$lang['new_position'] = 'Posisi Yang Baru';
$lang['current_class'] = 'Kelas Saat Ini';
$lang['new_class'] = 'Kelas Yang Baru';

//mutation
$lang['current_group'] = 'Grup Saat Ini';
$lang['new_group'] = 'Grup Yang Baru';
$lang['current_saldiv'] = 'Divisi Penggajian Saat Ini';
$lang['new_saldiv'] = 'Divisi Penggajian Yang Baru';
$lang['current_group_shift'] = 'Grup Shift Saat Ini';
$lang['new_group_shift'] = 'Grup Shift Yang Baru';
$lang['get_ben'] = 'Dapat Ekstra Manfaat';

//termination
$lang['termination_category'] = 'Kategori Terminasi';
$lang['effective_date_note'] = 'Tanggal ini merupakan tanggal terakhir karyawan bekerja';
$lang['status_bl'] = 'Blacklist Status';
$lang['bl_notes'] = 'Blacklist Notes';

//employee verivication letter
//nothing

//certificate of employment
//nothing

//salary adjustment
$lang['new_salary'] = 'Upah Yang Baru';

//salary BPJS adjustment
$lang['new_bpjs_ktn_salary'] = 'Upah BPJS KTN Yang Baru';
$lang['new_bpjs_ks_salary'] = 'Upah BPJS KS Yang Baru';
$lang['new_bpjs_exec_ktn_salary'] = 'Upah BPJS Eksekutif KTN Yang Baru';
$lang['new_bpjs_exec_ks_salary'] = 'Upah BPJS Eksekutif KS Yang Baru';

//salary BPJS Executive adjustment
//nothing

//semua import salary
//nothing

//import benefit deduction
$lang['form_import'] = 'Formulir Import';
$lang['form_export'] = 'Formulir Export';
$lang['form_import_detail'] = 'Detail Formulir Import';

//all benefit & all deduction
//nothing

//loan
$lang['loan_type'] = 'Tipe Pinjaman';
$lang['first_date_payment'] = 'Tanggal Pembayaran Pertama';
$lang['tenor'] = 'Tenor Pinjaman';
$lang['loan_interest'] = 'Bunga Pinjaman (%)';
$lang['payment_plan'] = 'Rencana Bayar';
$lang['seq'] = 'Urutan';
$lang['total_loan_payment'] = 'Jumlah Pembayaran Pinjaman';
$lang['total_outstanding_payment'] = 'Jumlah sisa pembayaran';
$lang['payment'] = 'Pembayaran';
$lang['loan_type_id'] = 'ID Tipe Pinjaman';
$lang['loan_type_name'] = 'Nama Tipe PInjaman';
$lang['loan_id'] = 'ID Pinjaman';
//loan payment
$lang['current_outstanding_loan'] = 'Sisa Pinjaman Saat Ini';
$lang['current_outstanding_loan_including_future_manual_payment'] = 'Sisa Pinjaman Saat Ini (Termasuk Rencana Bayar Manual Ke Depan)';
$lang['payment method'] = 'Metode Pembayaran';
$lang['benefit_date'] = 'Tanggal Tunjangan';
$lang['benefit_amount'] = 'Jumlah Tunjangan';
$lang['payment_amount'] = 'Jumlah Pembayaran';
// AR
$lang['total_receive_ar'] = 'Jumlah Penerimaan Piutang';
$lang['total_outstanding_ar'] = 'Jumlah Sisa Piutang';
$lang['receive_start_date'] = 'Tanggal Mulai Penerimaan';
$lang['receive_plan'] = 'Rencana Penerimaan';


//----------------------------------------TRANSACTION-----------------------------------

//semua calendar (per user, multiple, security)
$lang['select_year'] = 'Pilih Tahun';
$lang['calendar'] = 'Kalender';
$lang['select_group'] = 'Pilih Grup';

//---OT Editor
$lang['ot_date'] = 'Tanggal Lembur';
$lang['unprocess_ot_with_req'] = 'Lembur Dengan Pengajuan Yang Belum Di Proses';
$lang['unprocess_ot_without_req'] = 'Lembur Tanpa Pengajuan Yang Belum Di Proses';
$lang['in'] = 'Masuk';
$lang['out'] = 'Keluar';
$lang['hour'] = 'Jam';
$lang['pre_begin'] = 'Jam Awal Lembur Sebelum Masuk';
$lang['pre_end'] = 'Jam Akhir Lembur Sebelum Masuk';
$lang['post_begin'] = 'Jam Awal Lembur Setelah Pulang';
$lang['post_end'] = 'Jam Akhir Lembur Setelah Pulang';

//benefit editor
$lang['benefit_date'] = 'Tanggal Manfaat';
$lang['deduction'] = 'Potongan';
$lang['deduction_date'] = 'Tanggal Potongan';

//permit editor
$lang['permit_date'] = 'Tanggal Izin';
$lang['permit_id'] = 'ID Izin';

//leave editor
$lang['leave_id'] = 'ID Cuti';
$lang['leave_date'] = 'Tanggal Cuti';
$lang['leave_revision_date'] = 'Tanggal Revisi Cuti';
$lang['leave_before'] = 'Cuti Sebelum Revisi';

//announcement
//nothing

// Label Search
$lang['search_salary_type'] = 'Cari Tipe Upah';
$lang['search_employee'] = 'Cari Karyawan';
$lang['select_attendance_group'] = 'Pilih Grup Absensi';
$lang['select_emp_class'] = 'Pilih Kelas Karyawan';

//-------------------------------BUTTON---------------------------------------
$lang['add'] = 'Tambah Baru';
$lang['view'] = 'Lihat';
$lang['view_module'] = 'Lihat Modul';
$lang['edit'] = 'Ubah';
$lang['delete'] = 'Hapus';
$lang['approve'] = 'Setujui';
$lang['reject'] = 'Tolak';
$lang['confirm'] = 'Konfirmasi';
$lang['cancel'] = 'Batal';
$lang['back'] = 'Kembali';
$lang['submit'] = 'Kirim';
$lang['save'] = 'Simpan';
$lang['process'] = 'Proses';
$lang['print'] = 'Cetak';
$lang['close'] = 'Tutup';
$lang['add_date'] = 'Tambah Tanggal';
$lang['dwonload template'] = 'UNDUH TEMPLATE';
$lang['choose file'] = 'Pilih File';
$lang['import'] = 'Import';

//-------------------------------GENERAL---------------------------------------
$lang['to'] = 'Sampai';
$lang['name'] = 'Nama';
$lang['history_id'] = 'History ID';
$lang['history_date'] = 'Tanggal Histori';
$lang['trans_date'] = 'Tanggal Transaksi';
$lang['effective_date'] = 'Tanggal Efektif';
$lang['history_notes'] = 'Catatan Histori';
$lang['active_date'] = 'Tanggal Aktif';
$lang['created_date'] = 'Tanggal Dibuat';
$lang['created_by'] = 'Yang Membuat';
$lang['modify_date'] = 'Tanggal Diedit';
$lang['modify_by'] = 'Yang Mengedit';
$lang['approved_by'] = 'Yang Menyetujui';
$lang['approval_date'] = 'Tanggal Disetujui';
$lang['start_date'] = 'Tanggal Mulai';
$lang['end_date'] = 'Tanggal Berakhir';
$lang['hired_date'] = 'Tanggal Awal Kerja';
$lang['detail_date'] = 'Detail Tanggal';
$lang['process_date'] = 'Tanggal Proses';
$lang['terminated_date'] = 'Tanggal Akhir Kerja';
$lang['training_start_date'] = 'Tanggal Awal Pelatihan';
$lang['training_end_date'] = 'Tanggal Akhir Pelatihan';
$lang['cut_off_date'] = 'Tanggal Cut Off';
$lang['date'] = 'Tanggal';
$lang['time'] = 'Jam';
$lang['notes'] = 'Catatan';

$lang['wage'] = 'Upah';
$lang['salary'] = 'Upah';
$lang['amount'] = 'Jumlah';
$lang['val'] = 'Nilai';
$lang['att'] = 'Absensi';
$lang['unprocessed'] = 'Belum Di Proses';
$lang['approved'] = 'Disetujui';
$lang['rejected'] = 'Ditolak';
$lang['cancelled'] = 'Dibatalkan';
$lang['created'] = 'Dibuat';
$lang['needs_approval'] = 'Butuh Approval';
$lang['Request Approved'] = 'Persetujuan';
$lang['Request Rejected'] = 'Penolakan';
$lang['Request Cancelled'] = 'pembatalan';
$lang['Request Created'] = 'Pengajuan';
$lang['Request Needs Approval'] = 'Dibutuhkan Persetujuan';
$lang['all'] = 'Semua';
$lang['all_status'] = 'Semua Status';
$lang['filter'] = 'Saring';
$lang['clear'] = 'Bersihkan';
$lang['action'] = 'Tindakan';
//$lang['event_id'] = 'Event ID';
$lang['event_type'] = 'Tipe Peristiwa';
$lang['event_name'] = 'Nama Event';
$lang['event_approval'] = 'Persetujuan Peristiwa';
$lang['email'] = 'Surel';
$lang['general_email'] = 'Surel Urusan Umum';
$lang['salary_email'] = 'Surel Urusan Penggajian';
//$lang['user_id'] = 'User ID';
$lang['shift_id'] = 'Shift ID';
$lang['description'] = 'Deskripsi';
$lang['active'] = 'Aktif';
$lang['exclude'] = 'Dikecualikan';
$lang['exclude_process'] = 'Dikecualikan Dari Proses';
$lang['status_approval'] = 'Status Persetujuan';
$lang['reason'] = 'Alasan';
$lang['sanction'] = 'Sanksi';
$lang['autonumber'] = 'Nomor Otomatis';
$lang['remarks'] = 'Catatan';
$lang['template_remarks'] = 'Kata Dengan Simbol @ Tidak Boleh Diganti';
$lang['dont_change_component'] = 'Komponen yang jangan diubah';
$lang['exclude_filter_notes'] = 'Kosongkan jika tidak ingin menyaring ini';
$lang['exclude_security'] = 'Dikecualikan Karyawan Sekuriti';

$lang['server_address'] = 'Alamat Server';
$lang['database_id'] = 'Database ID';
$lang['database_name'] = 'Nama Database';
$lang['database_username'] = 'User Database';
$lang['database_password'] = 'Kata Sandi Database';
$lang['select'] = 'Pilih';
$lang['select_file_picture'] = 'Pilih File (GAMBAR)';
$lang['select_file_excel'] = 'Pilih File (EXCEL)';
$lang['choose_file'] = 'Pilih File';
$lang['attachment'] = 'Lampiran';
$lang['attach_ben_info'] = 'Aturan Lampiran File : Max. 5 item (ukuran 1MB/item)';
$lang['attach_info'] = 'Hanya Lampirkan File Dengan Templat Yang Sudah Ditentukan';
$lang['attach_error_1'] = 'Tipe/Format File Salah';
$lang['attach_error_2'] = 'File Tidak Ditemukan';
$lang['attach_error_3'] = 'File Belum Dipilih';
$lang['download_template'] = 'Unduh Templat';
$lang['departure_date'] = 'Tanggal Berangkat';
$lang['return_date'] = 'Tanggal kembali';
$lang['destination_city'] = 'Kota Tujuan';
$lang['passenger'] = 'Penumpang';
$lang['necessity'] = 'Keperluan';
$lang['destination_ben_info'] = '*) Pilih kota tujuan sesuai dengan kota cabang saat awal penempatan kerja';
$lang['return'] = 'Pergi - Pulang';
$lang['one_way'] = 'Sekali Jalan';
$lang['airplane'] = 'Pesawat Terbang';
$lang['train'] = 'Kereta Api';
$lang['travel'] = 'Travel/Bus';
$lang['select_passenger'] = 'Pilih Penumpang';
$lang['passenger_ben_info'] = '*) Jika nama penumpang tidak tersedia, isi data keluarga terlebih dahulu di menu Master Karyawan';
$lang['remaining_back_to_hometown'] = 'Sisa Pulang Kampung';
$lang['attach_ben_label_back_to_hometown'] = 'Lampiran Dokumen Penumpang (KTP / KK / Akte Nikah / Akte Lahir)';

$lang['event_filter'] = 'Saring Peristiwa';
$lang['clear_filter'] = 'Hapus Saring';
$lang['filter_division'] = 'Saring Divisi';
$lang['filter_branch'] = 'Saring Cabang';
$lang['filter_data'] = 'Saring Data';
$lang['filter_level'] = 'Saring Tingkatan';
$lang['filter_type'] = 'Saring Tipe Karyawan';
$lang['duty'] = 'Dinas';

$lang['leave_adjust'] = 'Penambahan Cuti';

$lang['set_config'] = 'Pilih Konfigurasi';
$lang['duplicate'] = 'Duplikat';
$lang['year_of_service'] = 'Tahun Pelayanan';
$lang['additional_leave'] = 'Tambahan Cuti';
$lang['leave_limit'] = 'Batas Cuti';
$lang['maximal_consecutive_leave'] = 'Maksimal Cuti Berurut';
$lang['minimal_time_limit'] = 'Minimal Batas Waktu';
$lang['maximal_time_limit'] = 'Maksimal Batas Waktu';
$lang['company_name'] = 'Nama Perusahaan';
$lang['company_address'] = 'Alamat Perusahaan';
$lang['head_name'] = 'Nama Kepala';
$lang['headLevel'] = 'Level Kepala';
$lang['active_date'] = 'Tanggal Aktif';
$lang['created_date'] = 'Tanggal Dibuat';
$lang['action'] = 'Tindakan';


$lang['calendar_security'] = 'Kalender Security';
$lang['calendar_per_user'] = 'Kalender Per User';
$lang['EnableOvertimeRequest'] = 'Aktifkan Permintaan Lembur';
$lang['calendar_multiple_user'] = 'Kalender Multi User';
$lang['calendar_multiple_user_by_group'] = 'Kalender Multi User Dengan Group';
$lang['flexible_shift'] = 'Shift Kerja Fleksibel';
$lang['fixed_shift'] = 'Shift Kerja Tetap';
$lang['date_type'] = 'Tipe Tanggal';
$lang['user_id_employee'] = 'User ID Karyawan';
$lang['check_time'] = 'Periksa Waktu';
$lang['manual_attendance'] = 'Absensi Manual';
$lang['payroll_benefit_status'] = 'Tanggal Manfaat Penggajian';


$lang['cut_off_date'] = 'Tanggal Cut Off';
$lang['max_salary_bpjs_ks'] = 'Upah Maksimum BPJS KS';
$lang['max_salary_bpjs_jp'] = 'Upah Maksimum BPJS JP';

$lang['salary_period'] = 'Periode Upah';
$lang['exclude_termination'] = 'Kecualikan Penghentian';
$lang['leave_empty_to_view'] = '(Biarkan kosong untuk melihat semua karyawan)';
$lang['leave_empty_to_exclude'] = '(Biarkan kosong untuk mengecualikan filter ini)';
$lang['branch_id'] = 'ID Cabang';
$lang['group_id'] = 'ID Grup';
$lang['employee_level_id'] = 'ID Tingkatan Karyawan';
$lang['minimal_late_filter'] = 'Filter Minimal Telat';
$lang['employee_type_id'] = 'ID Tipe Karyawan';
$lang['department_id'] = 'ID Departemen';
$lang['division_id'] = 'ID Divisi';
$lang['salary_type_id'] = 'ID Tipe Upah';

$lang['announcement_id'] = 'ID Pengumuman';
$lang['total_late_last_30'] = 'Total Terlambat (30 hari terakhir)';
$lang['total_sick_last_30'] = 'Total Sakit (30 hari terakhir)';
$lang['total_permit_last_30'] = 'Total Izin (30 hari terakhir)';
$lang['total_alpa_last_30'] = 'Total Alpa (30 hari terakhir)';
$lang['salary_division_id'] = 'ID Divisi Gaji';
$lang['user_id'] = 'User ID';
$lang['salary_slip'] = 'Laporan Slip Gaji';
$lang['salary_slip_a4'] = 'Laporan Slip Gaji A4';
$lang['salary_summary_monthly'] = 'Ringkasan Gaji Bulanan';
$lang['salary_summary_monthly_excel'] = 'Ringkasan Gaji Bulanan (Excel)';
$lang['rekap_salary_monthly'] = 'Rekap Gaji Bulanan';
$lang['rekap_salary_monthly_excel'] = 'Rekap Gaji Bulanan (Excel)';
$lang['salary_summary_ex'] = 'Ringkasan Gaji Mantan';
$lang['salary_summary_ex_excel'] = 'Ringkasan Gaji Mantan (Excel)';
$lang['rekap_salary_ex'] = 'Rekap Gaji Mantan';
$lang['rekap_salary_ex_excel'] = 'Rekap Gaji Mantan (Excel)';
$lang['email_slip'] = 'Slip Email';
$lang['pending_slip'] = 'Slip Pending';
$lang['generate_and_email'] = 'Menghasilkan dan Slip Email';

$lang['start_date'] = 'Tanggal Mulai';
$lang['available'] = 'Tersedia';
$lang['selected'] = 'Terpilih';
$lang['end_date'] = 'Tanggal Selesai';
$lang['begin'] = 'Awal';
$lang['end'] = 'Akhir';
$lang['attendance_date'] = 'Tanggal Absensi';

$lang['user blacklist'] = 'User Blacklist';

$lang['overtime_break'] = 'Istirahat Lembur';

$lang['salary_summary_extended'] = 'Ringkasan Gaji Diperpanjang';
$lang['salary_summary_extended_excel'] = 'Ringkasan Gaji Diperpanjang (Excel)';
$lang['salary_summary_daily'] = 'Ringkasan Gaji Harian';
$lang['salary_summary_daily_excel'] = 'Ringkasan Gaji Harian (Excel)';
$lang['rekap_salary_daily'] = 'Rekap Gaji Harian';
$lang['rekap_salary_daily_excel'] = 'Rekap Gaji Harian (Excel)';
$lang['salary division'] = 'Divisi Penggajian';

$lang['salary_summary_spg'] = 'Ringkasan Gaji SPG';
$lang['salary_summary_spg_excel'] = 'Ringkasan Gaji SPG (Excel)';

$lang['salary_type'] = 'Tipe Upah';
$lang['select_salary_type'] = 'Pilih Tipe Upah';
$lang['salary_group'] = 'Grup Upah';
$lang['select_salary_group'] = 'Pilih Grup Upah';
$lang['salary_period'] = 'Periode Upah';
$lang['end_date'] = 'Tanggal Akhir';
$lang['salary_process_list'] = 'Daftar Proses Perhitungan Upah';
$lang['last_process'] = 'Proses Terakhir';
$lang['payroll_date'] = 'Tanggal Penggajian';
$lang['lock_and_set'] = 'Kunci & Atur';
$lang['unlock'] = 'Buka Kunci';

$lang['sal_period'] = 'Periode Upah (mm/yyyy)';
$lang['salary_bpjs_ks'] = 'Upah BPJS KS';
$lang['salary_bpjs_ks_excel'] = 'Upah BPJS KS (Excel)';
$lang['salary_bpjs_ktn'] = 'Upah BPJS KTN';
$lang['salary_bpjs_ktn_excel'] = 'Upah BPJS KTN (Excel)';

$lang['bpjs_ks_mutation'] = 'Mutasi BPJS KS';
$lang['bpjs_ks_mutation_excel'] = 'Mutasi BPJS KS (Excel)';
$lang['bpjs_ktn_mutation'] = 'Mutasi BPJS KTN';
$lang['bpjs_ktn_mutation_excel'] = 'Mutasi BPJS KTN (Excel)';
$lang['bpjs_ktn_termination'] = 'Penghentian BPJS KTN';
$lang['bpjs_ktn_termination_excel'] = 'Penghentian BPJS KTN (Excel)';

$lang['salary_loan'] = 'Pinjaman Upah';
$lang['salary_loan_excel'] = 'Pinjaman Upah (Excel)';
$lang['salary_loan_rekap'] = 'Rekap Pinjaman Upah';
$lang['salary_loan_rekap_excel'] = 'Rekap Pinjaman Upah (Excel)';

$lang['from_date'] = 'Dari Tanggal';
$lang['to_date'] = 'Sampai Tanggal';

$lang['overtime'] = 'Lembur';
$lang['overtime_rekap'] = 'Rekap Lembur';
$lang['overtime_excel'] = 'Lembur (Excel)';
$lang['overtime_rekap_excel'] = 'Rekap Lembur (Excel)';
$lang['overtime_excel_ex'] = 'Lembur Mantan (Excel)';
$lang['overtime_rekap_excel_ex'] = 'Rekap Lembur Mantan (Excel)';

$lang['overtime_limit_day'] = 'Lembur tidak bisa lebih dari 12 jam per hari!';

$lang['all_terminate'] = 'Semua Terminasi ( Mantan Karyawan )';
$lang['none_terminate'] = 'Tidak Terminasi';

$lang['overtime_diligence'] = 'Lembur & Tunj Kerajinan';
$lang['overtime_diligence_rekap'] = 'Rekap Lembur & Tunj Kerajinan';
$lang['overtime_diligence_excel'] = 'Lembur & Tunj Kerajinan(Excel)';
$lang['overtime_diligence_rekap_excel'] = 'Rekap Lembur & Tunj Kerajinan(Excel)';
$lang['overtime_diligence_excel_ex'] = 'Lembur & Tunj Kerajinan Mantan(Excel)';
$lang['overtime_diligence_rekap_excel_ex'] = 'Rekap Lembur & Tunj Kerajinan Mantan(Excel)';

$lang['print_benefit'] = 'Print Manfaat/Tunjangan';
$lang['event_type_benefit'] = 'Tipe Tunjangan';
$lang['benefit_id'] = 'ID Tunjangan';
$lang['other'] = 'LAINNYA';
$lang['annual_benefit'] = 'THR';
$lang['bonus_benefit'] = 'TUNJANGAN BONUS';
$lang['exclusive_benefit'] = 'TUNJANGAN EKSKLUSIF';

$lang['benefit_summary'] = 'Ringkasan Tunjangan';
$lang['benefit_summary_excel'] = 'Ringkasan Tujangan (Excel)';
$lang['rekap_benefit'] = 'Rekap Tunjangan';
$lang['rekap_benefit_excel'] = 'Rekap Tunjangan (Excel)';

$lang['summary_report'] = 'Laporan Ringkasan';
$lang['summary_report_excel'] = 'Laporan Ringkasan (Excel)';

$lang['print_deduction'] = 'Print Potongan';
$lang['print_exclusive_deduction'] = 'Print Potongan Eksklusif';
$lang['deduction_id'] = 'ID Potongan';

$lang['terminate'] = 'Terminasi';
$lang['report_employee'] = 'Laporan Karyawan';
$lang['report_employee'] = 'Laporan Karyawan';
$lang['report_blacklist'] = 'Laporan Blacklist SDM';
$lang['report_blacklist'] = 'Laporan Blacklist SDM';
$lang['employee_report_excel'] = 'Laporan Karyawan (Excel)';
$lang['employee_report_exclude_process_excel'] = 'Laporan Karyawan Dikecualikan Dr Proses(Excel)';
$lang['employee_blacklist_report_excel'] = 'Laporan User Blacklist(Excel)';
$lang['end_contract'] = 'Data Habis Kontrak';
$lang['start_contract'] = 'Data Mulai Kontrak';
$lang['new_recruitment_training'] = 'KARYAWAN BARU YANG PELATIHAN';
$lang['training_extention'] = 'PERPANJANGAN PELATIHAN';
$lang['contract_1'] = 'KONTRAK 1';
$lang['contract_2'] = 'KONTRAK 2';
$lang['contract_3'] = 'KONTRAK 3';
$lang['period'] = 'Periode';

$lang['terminate_date'] = 'Tanggal Terminasi';

$lang['tax_period'] = 'Periode Pajak';
$lang['division_structure'] = 'Struktur Divisi';

$lang['per_date'] = 'Per Tanggal';
$lang['per_date_excel'] = 'Per Tanggal (Excel)';
$lang['absence'] = 'Absensi';
$lang['no_absence'] = 'Karyawan Tidak Absen';
$lang['late_absence'] = 'Karyawan Datang Telat';
$lang['attendance_summary'] = 'Ringkasan Absensi';

$lang['overtime_editor'] = 'Editor Lembur';
$lang['overtime_editor_excel'] = 'Editor Lembur (Excel)';
$lang['overtime_editor_summary'] = 'Ringkasan Editor Lembur';
$lang['overtime_editor_summary_excel'] = 'Ringkasan Editor Lembur (Excel)';

$lang['select_division'] = 'Pilih Divisi';
$lang['all_division'] = 'Semua Divisi';
$lang['report_absensi'] = 'Laporan Absensi Pribadi';
$lang['report_salary'] = 'Laporan Upah';
$lang['report_salary_daily'] = 'Laporan Upah Harian';
$lang['report_salary_spg'] = 'Laporan Upah SPM/SPG';
$lang['report_calculation_bpjs'] = 'Laporan Perhitungan BPJS';
$lang['report_salary_bpjs'] = 'Laporan Upah BPJS Umum';
$lang['report_salary_bpjs_executive'] = 'Laporan Upah BPJS Eksekutif';
$lang['report_bpjs_37_column'] = 'Laporan BPJS 37 Kolom';
$lang['report_loan'] = 'Laporan Hutang';
$lang['report_loan_rekap'] = 'Laporan Rekap Hutang';
$lang['report_overtime'] = 'Laporan Lembur & Tunj.Kerajinan';
$lang['report_fuelben'] = 'Laporan Tunj.Bensin & Parkir';
$lang['report_benefit'] = 'Laporan Manfaat';
$lang['report_benefit_by_group'] = 'Laporan Manfaat (Per Group)';
$lang['report_deduction'] = 'Laporan Potongan';
$lang['report_employee'] = 'Laporan Data Karyawan';
$lang['report_end_contract'] = 'Laporan Data Habis Kontrak';
$lang['report_start_contract'] = 'Laporan Data Mulai Kontrak';
$lang['report_tax'] = 'Laporan Pajak';
$lang['report_master'] = 'Laporan Master Data';
$lang['report_division'] = 'Laporan Divisi';
$lang['report_absensi_daily'] = 'Laporan Absensi Harian';
$lang['report_leave'] = 'Laporan Cuti';
$lang['report_overtime_editor'] = 'Laporan Lembur Editor';
$lang['report_overtime_pending'] = 'Laporan Lembur Editor Pending';
$lang['report_compare salary data'] = 'Laporan Perbandingan Data Upah';
$lang['salary_compare'] = 'Bandingkan Upah';
$lang['salary_compare_excel'] = 'Bandingkan Upah(Excel)';

//employe position
$lang['salary_division_name'] = 'Nama Divisi Penggajian';
$lang['position_id'] = 'ID Posisi';
$lang['position_name'] = 'Nama Posisi';
$lang['require_approval'] = 'Membutuhkan Persetujuan';
$lang['employee_position'] = 'Posisi Karyawan';
//employee group
$lang['employee_group'] = 'Grup Karyawan';
//shift
$lang['shift_name'] = 'Nama Shift';
$lang['check_in_out_time'] = 'Waktu Check In/Out [24H]';
$lang['break_start_finish_time'] = 'Waktu Istirahat Mulai/Selesai [24H]';
$lang['scan_begin_end_time'] = 'Waktu Scan Awal/Akhir [24H]';
$lang['late_tolerance'] = 'Toleransi Waktu Terlambat';
$lang['lunch_replacement'] = 'Pengganti Uang Makan';
$lang['shift_fee'] = 'Uang Shift';
$lang['break_duration'] = 'Durasi Istirahat';
//status type
$lang['status_type'] = 'Tipe Status';
$lang['status_id'] = 'Status ID';
$lang['status_name'] = 'Nama Status';
$lang['status_rule'] = 'Aturan Status';
$lang['color'] = 'Warna';
$lang['affect_leave'] = 'Mempengaruhi Cuti';
$lang['date_type_id'] = 'ID Tipe Hari Kerja';
//group shift
$lang['group_shift_id'] = 'ID Grup Shift';
$lang['group_shift_name'] = 'Nama Grup Shift';
$lang['changes not affected on earlier date than today'] = 'Perubahan tidak terpengaruh pada tanggal lebih awal dari hari ini';
//rule type
$lang['rule_type_id'] = 'ID Tipe Aturan';
$lang['rule_type_name'] = 'Nama Tipe Aturan';
//rule
$lang['rule_id'] = 'Rule ID';
$lang['rule_name'] = 'Nama Aturan';
$lang['rule_type'] = 'Tipe Aturan';
$lang['value'] = 'Nilai';
$lang['fixed'] = 'Tetap';
$lang['multiplier_of'] = 'Pengganda';
//PKP
$lang['tier'] = 'Tingkat';
$lang['range'] = 'Rentang';
$lang['rate'] = 'Nilai (%)';
$lang['have_npwp'] = 'Memiliki NPWP';
$lang['executive'] = 'Eksekutif';
//unit
$lang['unit_id'] = 'Unit ID';
$lang['unit_name'] = 'Nama Unit';
//umk
$lang['umk'] = 'UMK';
$lang['dwonload template umk'] = 'Unduh Templat UMK';
$lang['upload umk'] = 'Upload UMK';
$lang['basic_salary_bpjs'] = 'Dasar Gaji BPJS';
$lang['upload_umk'] = 'Upload UMK';

//group salary
$lang['group_salary_id'] = 'ID Grup Penggajian';
$lang['employee_group_salary'] = 'Grup Penggajian Karyawan';

//overtime process
$lang['overtime_process'] = 'Proses Lembur';
$lang['report_process'] = 'Proses Laporan';
$lang['spg'] = 'SPG';
$lang['nonspg'] = 'BukanSPG';
$lang['period_mm_yyy'] = 'Periode (mm/yyy)';
$lang['overtime_process_list'] = 'Daftar Proses Lembur';
$lang['locked_date'] = 'Tanggal Terkunci';
$lang['export_excel'] = 'Ekspor Excel';
$lang['export_ot_bank_excel'] = 'Export Lembur Bank Excel';
$lang['export_ot_bank_excel_ex'] = 'Export Lembur Bank Mantan Excel';
$lang['export_diligence_bank_excel'] = 'Export Tunj.Kerajinan Bank Tranfer';
$lang['export_diligence_bank_excel_ex'] = 'Export Tunj.Kerajinan Bank Tranfer Mantan';
$lang['export_perhitungan_pajak'] = 'Export Perhitungan Pajak';

//salary daily process
$lang['salary_daily_process_list'] = 'Daftar Proses Upah Harian';
$lang['export_salary_daily_bank_excel'] = 'Export Gaji Harian Bank Tranfer';
$lang['export_salary_daily_bank_excel_ex'] = 'Export Gaji Harian Bank Tranfer Mantan';
$lang['export_rekap_salary_daily_excel'] = 'Export Rekap Gaji Harian(Excel)';
$lang['export_salary_daily_excel_ex'] = 'Export Gaji Harian Mantan(Excel)';

//tax process
$lang['process_period'] = 'Proses Periode';
$lang['export_rekap_fuel_ben_excel'] = 'Export Rekap Tunj.Bensin&Parkir(Excel)';
$lang['export_fuel_ben_bank_excel'] = 'Export Tunj.Bensin & Parkir Bank Tranfer';
$lang['export_fuel_ben_bank_excel_ex'] = 'Export Tunj.Bensin & Parkir Mantan Bank Tranfer';
$lang['export_fuel_ben_excel_ex'] = 'Export Tunj.Bensin & Parkir Mantan(Excel)';

//-------------------------------ADMINISTRATION-------------------------------------

//configuration
$lang['encryption_type'] = 'Tipe Enskripsi';
$lang['import_settings'] = 'Impor Setting';
$lang['database_mode'] = 'Mode Database';
$lang['database_type'] = 'Tipe Database';
$lang['server_ip'] = 'Server IP';
$lang['username'] = 'Nama Pengguna';
$lang['password'] = 'Kata Sandi';
$lang['database diinput ke master database'] = 'database diinput ke master database';
$lang['export_debug_settings'] = 'Ekspor Debug Setting';
$lang['email_no_reply_setting'] = 'Email Tanpa pengaturan Balasan';
$lang['host_email_no_reply'] = 'Host Email Tanpa Balasan';
$lang['port_email_no_reply'] = 'Port Email Tanpa Balasan';
$lang['email_no_reply'] = 'Email Tanpa Balasan';
$lang['must_be_gmail'] = '(harus gmail)';
$lang['password_email_no_reply'] = 'Kata Sandi Email Tanpa Balasan';
$lang['form_email_no_reply'] = 'Form Email Tanpa Balasan';
$lang['name_email_no_reply'] = 'Nama Email Tanpa Balasan';

//module
$lang['module_id'] = 'Modul ID';
$lang['module_name'] = 'Nama Modul';
$lang['module_type'] = 'Tipe Modul';
$lang['parent'] = 'Induk';
$lang['parent_id'] = 'ID Induk';
$lang['parent_module'] = 'Modul Induk';
$lang['last'] = 'Terakhir';
$lang['first'] = 'Pertama';
$lang['after'] = 'Setelah';
$lang['controller'] = 'Pengontrol';
$lang['separator_after'] = 'Pemisah Setelah';
//role
$lang['check if this role to view company statistic'] = '(periksa apakah peran ini untuk melihat statistik perusahaan)';
$lang['role_id'] = 'ID Wewenang';
$lang['is_hrd'] = 'HRD';
$lang['is_all_division'] = 'Semua Divisi';
$lang['type'] = 'Tipe';
//config approval
$lang['config_id'] = 'ID Konfig';
$lang['employee_division'] = 'Divisi Karyawan';
$lang['approve_level'] = 'Level Persetujuan';
$lang['work_group'] = 'Grup Kerja';
$lang['edit_user'] = 'UbahUser';
$lang['user_id_approval'] = 'Persetujuan User ID';
$lang['change to user approval'] = 'Ubah untuk Persetujuan Konfig Spesial';
$lang['transaction_date'] = 'Tanggal Transaksi';
//database
$lang['database_code'] = 'Kode Database';
$lang['server'] = 'Server';
$lang['last_update_date'] = 'Tanggal Terakhir Diubah';
$lang['debug'] = 'Debug';
$lang['destination'] = '(Tujuan)';
$lang['card_number'] = 'KTP';
$lang['no_rek'] = 'No Rek';

//Event
$lang['OVERTIME'] = 'Lembur';

//EmployeeView
$lang['registration_date'] = 'Tanggal Masuk';
$lang['start_contract_date'] = 'Tanggal Awal Kontrak';
$lang['end_contract_date'] = 'Tanggal Akhir Kontrak';
$lang['permanent_date'] = 'Tanggal Pengangkatan Tetap';
$lang['promotion_date2'] = 'Tanggal Promosi';
$lang['termination_date'] = 'Tanggal Termination';

//Tambah Menu MonitoringWA
$lang['monitoring whatsapp'] = 'Monitoring WA';
$lang['download slip gaji'] = 'Download Slip Gaji';

//Report Salary
$lang['whatsapp_slip'] = 'Whatsapp Slip';
$lang['generate_and_whatsapp'] = 'Menghasilkan Dan Whatsapp Slip';
$lang['cancel_whatsapp'] = 'Membatalkan Whatsapp';

$lang['component'] = 'Component';


$lang['component_id'] = 'ComponentID';
$lang['component_name'] = 'Component';
$lang['component_formula'] = 'Component Formula';


$lang['processed_by_gA'] = 'Diproses GA';


$lang['transportation'] = 'Transportasi';


$lang['name_email_ga'] = 'Email GA';

