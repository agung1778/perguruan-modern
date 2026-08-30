<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Agenda;
use App\Models\EducationUnit;
use App\Models\FoundationLeader;
use App\Models\FoundationOrganization;
use App\Models\GalleryAlbum;
use App\Models\GalleryPhoto;
use App\Models\HomepageBanner;
use App\Models\Major;
use App\Models\NewsArticle;
use App\Models\NewsCategory;
use App\Models\Ppdb;
use App\Models\Student;
use App\Models\StudentData;
use App\Models\Teacher;
use App\Models\Testimonial;
use App\Models\WebsiteSetting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ContentSeeder extends Seeder
{
    private array $units = [];

    public function run(): void
    {
        $this->seedWebsiteSetting();
        $this->seedUnits();
        $this->seedMajors();
        $this->seedTeachers();
        $this->seedStudents();
        $this->seedStudentData();
        $this->seedNews();
        $this->seedAgendas();
        $this->seedGallery();
        $this->seedTestimonials();
        $this->seedBanners();
        $this->seedFoundation();
        $this->seedAbout();
        $this->seedPpdb();
    }

    private function seedWebsiteSetting(): void
    {
        WebsiteSetting::query()->delete();

        $this->image('website/logo.svg', ['Perguruan', 'Amaliah'], 512, 512, '#ffffff', '#065f46');
        $this->image('website/favicon.svg', ['A'], 64, 64, '#ffffff', '#047857');

        WebsiteSetting::create([
            'school_name' => 'SIP Perguruan Amaliah',
            'site_name' => 'Perguruan Amaliah',
            'welcome_message' => 'Selamat datang di website resmi Perguruan Amaliah. Kami hadir sebagai lembaga pendidikan Islam yang berkomitmen mencerdaskan generasi melalui kolaborasi ilmu, iman, dan akhlak mulia. Mari bersama membangun masa depan pendidikan yang lebih baik.',
            'logo' => 'website/logo.svg',
            'favicon' => 'website/favicon.svg',
            'about' => 'Perguruan Amaliah adalah lembaga pendidikan Islam terpadu yang menyelenggarakan pendidikan dari jenjang PAUD/TK hingga SMA dan Pesantren Tahfidz. Kami mengintegrasikan kurikulum nasional dengan penguatan nilai-nilai keislaman dalam setiap proses pembelajarannya.',
            'history' => "Perguruan Amaliah berdiri pada tahun 2016 dengan cita-cita menghadirkan pendidikan Islam yang modern dan berkualitas.\n\nBerawal dari sebuah majelis taklim dan taman belajar kecil di sekitar masjid, lembaga ini tumbuh menjadi perguruan yang menaungi lima unit pendidikan. Setiap tahun jumlah pendaftar terus meningkat, seiring kepercayaan masyarakat terhadap kualitas lulusan dan pembinaan akhlak yang diterapkan.",
            'vision' => "Terwujudnya generasi Qur'ani yang unggul dalam prestasi, berkarakter mulia, serta mampu bersaing secara global.",
            'mission' => "1. Menyelenggarakan pembelajaran yang menyenangkan dan bermakna.\n2. Membiasakan ibadah dan akhlak mulia dalam keseharian.\n3. Mengembangkan bakat dan potensi peserta didik secara optimal.\n4. Membangun kemitraan antara sekolah, orang tua, dan masyarakat.\n5. Menyiapkan lulusan yang siap melanjutkan ke jenjang pendidikan selanjutnya.",
            'address' => 'Jl. Pendidikan Islam No. 1, Kel. Sukamaju, Kec. Cibubur, Kota Jakarta, DKI Jakarta 16998',
            'phone' => '0812-3456-7890',
            'email' => 'info@perguruanamaliah.sch.id',
            'google_maps' => 'https://www.google.com/maps?q=-6.3333,106.8833&z=15&output=embed',
            'facebook' => 'https://facebook.com/perguruanamaliah',
            'instagram' => 'https://instagram.com/perguruanamaliah',
            'youtube' => 'https://youtube.com/@perguruanamaliah',
            'meta_description' => 'Website resmi Perguruan Amaliah: lembaga pendidikan Islam terpadu dari PAUD/TK hingga SMA. Informasi PPDB, berita, kegiatan, prestasi, dan profil lengkap.',
        ]);
    }

    private function seedUnits(): void
    {
        EducationUnit::query()->delete();

        $data = [
            ['name' => 'KB-TK Amaliah', 'short_name' => 'KB-TK', 'sort_order' => 1,
                'description' => 'Pendidikan anak usia dini yang menyenangkan dengan penanaman nilai-nilai Islam sejak dini.'],
            ['name' => 'SDIT Amaliah', 'short_name' => 'SDIT', 'sort_order' => 2,
                'description' => 'Sekolah dasar Islam terpadu berstandar nasional dengan program tahfidz dan bilingual.'],
            ['name' => 'SMPIT Amaliah', 'short_name' => 'SMPIT', 'sort_order' => 3,
                'description' => 'Sekolah menengah pertama Islam terpadu yang mengedepankan ahlak, akademik, dan life skill.'],
            ['name' => 'SMAIT Amaliah', 'short_name' => 'SMAIT', 'sort_order' => 4,
                'description' => 'Sekolah menengah atas Islam terpadu dengan peminatan IPA, IPS, dan Agama plus program tahfidz.'],
            ['name' => 'Pesantren Tahfidz Amaliah', 'short_name' => 'Tahfidz', 'sort_order' => 5,
                'description' => 'Program pesantren tahfidz Al-Qur\'an mulai 1 hingga 30 juz dengan pembinaan adab.'],
        ];

        foreach ($data as $i => $item) {
            $slug = Str::slug($item['name']);
            $this->image("units/{$slug}/logo.svg", ['Amaliah'], 512, 512, '#ffffff', '#065f46');
            $this->image("units/{$slug}/photo.svg", [$item['short_name']], 1200, 600, '#047857', '#10b981');

            $this->units[$item['name']] = EducationUnit::create([
                ...$item,
                'logo' => "units/{$slug}/logo.svg",
                'photo' => "units/{$slug}/photo.svg",
                'website' => 'https://perguruanamaliah.sch.id',
                'is_active' => true,
            ]);
        }
    }

    private function seedMajors(): void
    {
        $smait = $this->units['SMAIT Amaliah'];

        foreach ([
            ['name' => 'Matematika dan Ilmu Pengetahuan Alam (MIPA)', 'short_name' => 'IPA', 'sort_order' => 1],
            ['name' => 'Ilmu Pengetahuan Sosial (IPS)', 'short_name' => 'IPS', 'sort_order' => 2],
            ['name' => 'Ilmu Agama', 'short_name' => 'Agama', 'sort_order' => 3],
        ] as $major) {
            Major::create([
                'education_unit_id' => $smait->id,
                ...$major,
                'is_active' => true,
            ]);
        }
    }

    private function seedTeachers(): void
    {
        Teacher::query()->delete();

        $unit = fn (string $name) => $this->units[$name]->id;

        $data = [
            ['name' => 'Drs. H. Abdullah Hakim, M.Pd.', 'type' => 'teacher', 'education_unit_id' => $unit('SMAIT Amaliah'),
                'nip' => '197512102002121001', 'nuptk' => '1255760871300032', 'gender' => 'L',
                'birth_place' => 'Jakarta', 'birth_date' => '1975-12-10', 'position' => 'Kepala Sekolah',
                'subject' => 'Pendidikan Agama Islam', 'employment_status' => 'Tetap', 'join_year' => 2012,
                'description' => 'Kepala SMAIT Amaliah dengan pengalaman lebih dari 20 tahun di dunia pendidikan.'],
            ['name' => 'Dra. Hj. Siti Maryam, M.Pd.', 'type' => 'teacher', 'education_unit_id' => $unit('SDIT Amaliah'),
                'nip' => '197803142005012004', 'nuptk' => '4544767870300043', 'gender' => 'P',
                'birth_place' => 'Bandung', 'birth_date' => '1978-03-14', 'position' => 'Kepala Sekolah',
                'subject' => 'Guru Kelas', 'employment_status' => 'Tetap', 'join_year' => 2016,
                'description' => 'Kepala SDIT Amaliah, pemerhati pendidikan anak usia dini dan sekolah dasar.'],
            ['name' => 'Rusydi, S.Pd.', 'type' => 'teacher', 'education_unit_id' => $unit('SMAIT Amaliah'),
                'nip' => '198506102010011006', 'nuptk' => '9757768871300045', 'gender' => 'L',
                'birth_place' => 'Semarang', 'birth_date' => '1985-06-10', 'position' => 'Guru Matematika',
                'subject' => 'Matematika', 'employment_status' => 'Tetap', 'join_year' => 2017,
                'description' => 'Guru Matematika yang hobi melatih siswa olimpiade sains.'],
            ['name' => 'Nur Fitria, S.Si.', 'type' => 'teacher', 'education_unit_id' => $unit('SMPIT Amaliah'),
                'nuptk' => '5539770871300021', 'gender' => 'P',
                'birth_place' => 'Surabaya', 'birth_date' => '1991-08-22', 'position' => 'Guru IPA',
                'subject' => 'Ilmu Pengetahuan Alam', 'employment_status' => 'Honorer', 'join_year' => 2022,
                'description' => 'Guru IPA muda yang kreatif menggunakan praktikum dalam pembelajaran.'],
            ['name' => 'Ahmad Zaki, S.Pd.I.', 'type' => 'teacher', 'education_unit_id' => $unit('Pesantren Tahfidz Amaliah'),
                'nuptk' => '2241767871300056', 'gender' => 'L',
                'birth_place' => 'Yogyakarta', 'birth_date' => '1988-01-30', 'position' => 'Pembina Tahfidz',
                'subject' => 'Tahfidzul Quran', 'employment_status' => 'Kontrak', 'join_year' => 2021,
                'description' => 'Hafidz 30 juz, pembina tahfidz dan bimbingan adab santri.'],
            ['name' => 'Dewi Lestari, S.Pd.', 'type' => 'teacher', 'education_unit_id' => $unit('SDIT Amaliah'),
                'nuptk' => '4139767871300077', 'gender' => 'P',
                'birth_place' => 'Bogor', 'birth_date' => '1992-05-17', 'position' => 'Guru Bahasa Indonesia',
                'subject' => 'Bahasa Indonesia', 'employment_status' => 'Tidak Tetap', 'join_year' => 2020,
                'description' => 'Guru Bahasa Indonesia aktif dalam kegiatan literasi sekolah.'],
            ['name' => 'Kholid, S.Kom.', 'type' => 'staff', 'education_unit_id' => $unit('SMAIT Amaliah'),
                'nip' => '198703152010121007', 'gender' => 'L',
                'birth_place' => 'Tangerang', 'birth_date' => '1987-03-15', 'position' => 'Kepala Tata Usaha',
                'employment_status' => 'Tetap', 'join_year' => 2018,
                'description' => 'Kepala Tata Usaha yang menangani administrasi dan pembelajaran digital.'],
            ['name' => 'Fitriani, A.Md.', 'type' => 'staff', 'education_unit_id' => $unit('SMPIT Amaliah'),
                'nuptk' => '3241767871300088', 'gender' => 'P',
                'birth_place' => 'Depok', 'birth_date' => '1994-09-06', 'position' => 'Bendahara',
                'employment_status' => 'Kontrak', 'join_year' => 2021,
                'description' => 'Bendahara yang bertanggung jawab atas pembukuan dan laporan keuangan.'],
            ['name' => 'Muhammad Alif, S.Pd.', 'type' => 'teacher', 'education_unit_id' => $unit('SMPIT Amaliah'),
                'nuptk' => '1041767871300090', 'gender' => 'L',
                'birth_place' => 'Bekasi', 'birth_date' => '1996-02-11', 'position' => 'Guru Olahraga',
                'subject' => 'Pendidikan Jasmani', 'employment_status' => 'Honorer', 'join_year' => 2023,
                'description' => 'Guru PJOK serta pembina ekstrakurikuler futsal dan basket.'],
            ['name' => 'Rina Wahyuni, S.Pd.', 'type' => 'teacher', 'education_unit_id' => $unit('SDIT Amaliah'),
                'nuptk' => '5539767871300102', 'gender' => 'P',
                'birth_place' => 'Cirebon', 'birth_date' => '1990-06-25', 'position' => 'Guru Bahasa Inggris',
                'subject' => 'Bahasa Inggris', 'employment_status' => 'Tidak Tetap', 'join_year' => 2019,
                'description' => 'Guru Bahasa Inggris sekaligus koordinator program bilingual.'],
        ];

        foreach ($data as $item) {
            $photo = 'teachers/'.Str::slug($item['name']).'.svg';
            $this->image($photo, [$item['name'], $item['position']], 400, 480, '#047857', '#10b981');
            Teacher::create([...$item, 'photo' => $photo, 'bio' => $item['description'] ?? null, 'is_active' => true]);
        }
    }

    private function seedStudents(): void
    {
        Student::query()->delete();

        $unit = fn (string $name) => $this->units[$name]->id;

        $data = [
            ['name' => 'Ahmad Fauzan', 'education_unit_id' => $unit('SDIT Amaliah'), 'nisn' => '0123456781', 'gender' => 'L',
                'birth_place' => 'Jakarta', 'birth_date' => '2014-03-12', 'batch' => 'Tahun Ajaran 2025/2026',
                'class' => '6A', 'status' => 'Aktif', 'entry_year' => 2019,
                'description' => 'Siswa teladan SDIT Amaliah, hafal 5 juz Al-Qur\'an.'],
            ['name' => 'Siti Nurhaliza', 'education_unit_id' => $unit('SDIT Amaliah'), 'nisn' => '0123456782', 'gender' => 'P',
                'birth_place' => 'Depok', 'birth_date' => '2015-07-08', 'batch' => 'Tahun Ajaran 2025/2026',
                'class' => '5B', 'status' => 'Aktif', 'entry_year' => 2020,
                'description' => 'Juara 1 lomba pidato tingkat kota.'],
            ['name' => 'Muhammad Rizki', 'education_unit_id' => $unit('SMPIT Amaliah'), 'nisn' => '0123456783', 'gender' => 'L',
                'birth_place' => 'Bekasi', 'birth_date' => '2011-11-19', 'batch' => 'Tahun Ajaran 2025/2026',
                'class' => '8A', 'status' => 'Aktif', 'entry_year' => 2023,
                'description' => 'Ketua Osis SMPIT Amaliah masa bakti 2025/2026.'],
            ['name' => 'Aisyah Rahmadina', 'education_unit_id' => $unit('SMPIT Amaliah'), 'nisn' => '0123456784', 'gender' => 'P',
                'birth_place' => 'Tangerang', 'birth_date' => '2010-04-02', 'batch' => 'Tahun Ajaran 2025/2026',
                'class' => '9C', 'status' => 'Aktif', 'entry_year' => 2022,
                'description' => 'Peserta olimpiade sains provinsi bidang IPA.'],
            ['name' => 'Bagas Prakoso', 'education_unit_id' => $unit('SMAIT Amaliah'), 'nisn' => '0123456785', 'gender' => 'L',
                'birth_place' => 'Jakarta', 'birth_date' => '2008-08-15', 'batch' => 'Tahun Ajaran 2025/2026',
                'major' => 'IPA', 'class' => 'XII IPA 1', 'status' => 'Aktif', 'entry_year' => 2023, 'graduation_year' => 2026,
                'description' => 'Lolos seleksi beasiswa ke perguruan tinggi favorit.'],
            ['name' => 'Nadia Putri', 'education_unit_id' => $unit('SMAIT Amaliah'), 'nisn' => '0123456786', 'gender' => 'P',
                'birth_place' => 'Bogor', 'birth_date' => '2008-01-25', 'batch' => 'Tahun Ajaran 2025/2026',
                'major' => 'IPS', 'class' => 'XII IPS 1', 'status' => 'Aktif', 'entry_year' => 2023, 'graduation_year' => 2026,
                'description' => 'Juara lomba karya tulis ilmiah pelajar tingkat nasional.'],
            ['name' => 'Zahra Almira', 'education_unit_id' => $unit('KB-TK Amaliah'),
                'birth_place' => 'Jakarta', 'birth_date' => '2020-05-20', 'batch' => 'Tahun Ajaran 2025/2026',
                'class' => 'TK B', 'status' => 'Aktif', 'entry_year' => 2024,
                'description' => 'Anak ceria dan aktif mengikuti kegiatan islami.'],
        ];

        foreach ($data as $item) {
            $photo = 'students/'.Str::slug($item['name']).'.svg';
            $this->image($photo, [$item['name'], $item['class']], 400, 480, '#0369a1', '#0ea5e9');
            Student::create([...$item, 'photo' => $photo]);
        }
    }

    private function seedStudentData(): void
    {
        StudentData::query()->delete();

        $unit = fn (string $name) => $this->units[$name]->id;

        $this->seedStudentDataRow($unit('KB-TK Amaliah'), '2025/2026', 'Angkatan 2026', 42, 38, 0, 0, 5, 0, 19);
        $this->seedStudentDataRow($unit('SDIT Amaliah'), '2025/2026', 'Angkatan 2026', 96, 80, 0, 0, 4, 10, 25);
        $this->seedStudentDataRow($unit('SMPIT Amaliah'), '2025/2026', 'Angkatan 2026', 75, 88, 0, 0, 7, 12, 22);
        $this->seedStudentDataRow($unit('SMAIT Amaliah'), '2025/2026', 'Angkatan 2026', 45, 40, 8, 3, 2, 6, 12, 'IPA');
        $this->seedStudentDataRow($unit('SMAIT Amaliah'), '2025/2026', 'Angkatan 2026', 41, 36, 6, 5, 3, 4, 10, 'IPS');
        $this->seedStudentDataRow($unit('Pesantren Tahfidz Amaliah'), '2025/2026', 'Angkatan 2026', 30, 18, 4, 2, 6, 8, 14);

        $this->seedStudentDataRow($unit('KB-TK Amaliah'), '2024/2025', 'Angkatan 2025', 38, 35, 0, 0, 4, 0, 17);
        $this->seedStudentDataRow($unit('SDIT Amaliah'), '2024/2025', 'Angkatan 2025', 90, 76, 0, 0, 6, 8, 22);
        $this->seedStudentDataRow($unit('SMPIT Amaliah'), '2024/2025', 'Angkatan 2025', 70, 82, 0, 0, 5, 10, 20);
        $this->seedStudentDataRow($unit('SMAIT Amaliah'), '2024/2025', 'Angkatan 2025', 40, 38, 7, 4, 2, 5, 11, 'IPA');
        $this->seedStudentDataRow($unit('SMAIT Amaliah'), '2024/2025', 'Angkatan 2025', 38, 34, 5, 4, 3, 3, 9, 'IPS');
    }

    private function seedStudentDataRow(
        string $unitId,
        string $academicYear,
        string $generation,
        int $male,
        int $female,
        int $tahfiz = 0,
        int $akademik = 0,
        int $nonAkademik = 0,
        int $yatim = 0,
        int $yayasan = 0,
        ?string $major = null,
    ): void {
        StudentData::create([
            'education_unit_id' => $unitId,
            'major' => $major,
            'academic_year' => $academicYear,
            'generation' => $generation,
            'male_count' => $male,
            'female_count' => $female,
            'total_count' => $male + $female,
            'scholarship_tahfiz' => $tahfiz,
            'scholarship_akademik' => $akademik,
            'scholarship_non_akademik' => $nonAkademik,
            'scholarship_yatim' => $yatim,
            'scholarship_yayasan' => $yayasan,
        ]);
    }

    private function seedNews(): void
    {
        NewsCategory::query()->delete();
        NewsArticle::query()->delete();

        $prestasi = NewsCategory::create(['name' => 'Prestasi', 'slug' => 'prestasi', 'is_active' => true]);
        $kegiatan = NewsCategory::create(['name' => 'Kegiatan', 'slug' => 'kegiatan', 'is_active' => true]);
        $pengumuman = NewsCategory::create(['name' => 'Pengumuman', 'slug' => 'pengumuman', 'is_active' => true]);
        $artikel = NewsCategory::create(['name' => 'Artikel', 'slug' => 'artikel', 'is_active' => true]);

        $news = [
            [
                'category' => $prestasi->id, 'title' => 'Raih Prestasi, Siswa SMAIT Amaliah Juara 1 Olimpiade Matematika Tingkat Nasional',
                'excerpt' => 'Bagas Prakoso, siswa kelas XII IPA, berhasil meraih medali emas dalam ajang Olimpiade Sains Nasional bidang Matematika.',
                'published_at' => '2026-08-18 09:00:00', 'content' => self::newsContent([
                    'Selamat dan apresiasi setinggi-tingginya untuk Bagas Prakoso yang berhasil menyabet Juara 1 Olimpiade Matematika tingkat nasional.',
                    'Kompetisi yang diikuti oleh ribuan pelajar dari seluruh Indonesia ini menjadi bukti bahwa kualitas akademik SMAIT Amaliah mampu bersaing di kancah nasional.',
                    'Kepala sekolah menyampaikan bahwa prestasi ini adalah buah dari kerja keras siswa dan pembinaan guru yang konsisten. Semoga keberhasilan ini memotivasi siswa lainnya.',
                ]),
            ],
            [
                'category' => $kegiatan->id, 'title' => 'Pesantren Ramadhan 1447 H: Membangun Karakter Generasi Qur\'ani',
                'excerpt' => 'Selama bulan Ramadhan, seluruh unit pendidikan menyelenggarakan kegiatan tadarus, kajian, dan buka bersama.',
                'published_at' => '2026-03-05 10:30:00', 'content' => self::newsContent([
                    'Kegiatan Pesantren Ramadhan 1447 Hijriah berlangsung meriah di seluruh unit Perguruan Amaliah.',
                    'Program ini mencakup tadarus bersama, setoran hafalan, kajian tematik, serta kegiatan sosial santunan anak yatim di sekitar lingkungan sekolah.',
                    'Dengan suasana yang penuh kekhidmatan, diharapkan peserta didik semakin mencintai Al-Qur\'an dan terbiasa berbagi kepada sesama.',
                ]),
            ],
            [
                'category' => $pengumuman->id, 'title' => 'Pengumuman Hasil Seleksi PPDB Tahun Ajaran 2026/2027',
                'excerpt' => 'Bagi calon peserta didik baru yang telah mengikuti seleksi gelombang pertama, pengumuman hasil dapat dilihat di website resmi ini.',
                'published_at' => '2026-08-25 14:00:00', 'content' => self::newsContent([
                    'Hasil seleksi Penerimaan Peserta Didik Baru (PPDB) gelombang pertama Tahun Ajaran 2026/2027 telah diumumkan.',
                    'Calon peserta didik dapat melihat pengumuman melalui halaman PPDB di website ini. Bagi yang lulus, dimohon segera melakukan daftar ulang sesuai jadwal yang tertera.',
                    'Untuk gelombang kedua, pendaftaran masih terbuka. Informasi lebih lanjut dapat menghubungi panitia PPDB di nomor kontak yang tersedia.',
                ]),
            ],
            [
                'category' => $kegiatan->id, 'title' => 'MPLS SDIT Amaliah: Masa Pengenalan Lingkungan Sekolah yang Seru',
                'excerpt' => 'Peserta didik baru disambut dengan kegiatan MPLS yang penuh keceriaan dan pengenalan program sekolah.',
                'published_at' => '2026-07-15 08:45:00', 'content' => self::newsContent([
                    'Masa Pengenalan Lingkungan Sekolah (MPLS) di SDIT Amaliah berlangsung selama tiga hari dengan berbagai permainan edukatif.',
                    'Peserta didik baru diperkenalkan dengan fasilitas sekolah, tata tertib, serta budaya islami seperti pembiasaan sholat dhuha dan hafalan surat pendek.',
                    'Semangat dan antusiasme peserta didik baru sangat tinggi, menandakan awal tahun ajaran yang menjanjikan.',
                ]),
            ],
            [
                'category' => $artikel->id, 'title' => 'Penandatanganan MoU Kerjasama Perguruan Amaliah dengan Universitas Islam Negeri',
                'excerpt' => 'Kerjasama meliputi magang mahasiswa, pelatihan guru, dan program pengabdian masyarakat.',
                'published_at' => '2026-06-02 11:15:00', 'content' => self::newsContent([
                    'Perguruan Amaliah resmi menjalin kerjasama dengan Universitas Islam Negeri melalui penandatanganan nota kesepahaman (MoU).',
                    'Ruang lingkup kerjasama mencakup program magang mahasiswa, pelatihan pengembangan profesional guru, serta kegiatan pengabdian masyarakat.',
                    'Diharapkan kerjasama ini mampu meningkatkan mutu pendidikan dan membuka lebih banyak peluang bagi peserta didik.',
                ]),
            ],
            [
                'category' => $prestasi->id, 'title' => '12 Santri Tahfidz Khatam 30 Juz Al-Qur\'an Angkatan 2026',
                'excerpt' => 'Dua belas santri Pesantren Tahfidz Amaliah menyelesaikan hafalan 30 juz dan siap diwisuda.',
                'published_at' => '2026-05-20 16:00:00', 'content' => self::newsContent([
                    'Kabar membanggakan hadir dari Pesantren Tahfidz Amaliah: 12 santri berhasil khatam hafalan 30 juz Al-Qur\'an.',
                    'Pencapaian ini diraih setelah melalui proses pembinaan selama rata-rata tiga tahun, dengan setoran harian dan muraja\'ah rutin.',
                    'Program wisuda tahfidz akan digelar dalam rangkaian acara Milad Perguruan Amaliah ke-10 pada bulan September mendatang.',
                ]),
            ],
        ];

        foreach ($news as $item) {
            $slug = Str::slug($item['title']);
            $this->image("news/{$slug}.svg", [Str::limit($item['title'], 60)], 900, 520, '#059669', '#34d399');
            NewsArticle::create([
                'news_category_id' => $item['category'],
                'title' => $item['title'],
                'slug' => $slug,
                'excerpt' => $item['excerpt'],
                'status' => 'published',
                'published_at' => $item['published_at'],
                'thumbnail' => "news/{$slug}.svg",
                'content' => $item['content'],
            ]);
        }
    }

    private static function newsContent(array $paragraphs): string
    {
        return implode("\n\n", $paragraphs);
    }

    private function seedAgendas(): void
    {
        Agenda::query()->delete();

        $data = [
            ['title' => 'Rapat Kerja Para Kepala Sekolah dan Pengurus Yayasan', 'date' => '2026-09-05',
                'location' => 'Aula Perguruan Amaliah', 'description' => 'Pembahasan program kerja semester gasal serta evaluasi kinerja seluruh unit.'],
            ['title' => 'Festival Sains dan Seni Amaliah 2026', 'date' => '2026-10-15',
                'location' => 'GOR Sawojajar', 'description' => 'Ajang olimpiade, lomba pidato, tahfidz, dan kesenian antar unit Perguruan Amaliah.'],
            ['title' => 'Wisuda dan Pelepasan Kelas XII Tahun Ajaran 2025/2026', 'date' => '2026-06-20',
                'location' => 'Auditorium Utama', 'description' => 'Pelepasan dan wisuda peserta didik kelas XII SMAIT Amaliah.'],
            ['title' => 'Pembagian Rapor Semester Genap', 'date' => '2026-06-28',
                'location' => 'Ruang kelas masing-masing', 'description' => 'Pembagian rapor semester genap untuk seluruh jenjang; mohon kehadiran orang tua/wali.'],
            ['title' => 'Pertemuan Wali Murid dan Sosialisasi Kurikulum Baru', 'date' => '2026-08-30',
                'location' => 'Aula Perguruan Amaliah', 'description' => 'Sosialisasi kurikulum dan program unggulan kepada orang tua/wali murid.'],
        ];

        foreach ($data as $item) {
            Agenda::create([
                ...$item,
                'slug' => Str::slug($item['title']),
                'is_active' => true,
            ]);
        }
    }

    private function seedGallery(): void
    {
        GalleryAlbum::query()->delete();
        GalleryPhoto::query()->delete();

        $albums = [
            ['title' => 'Class Meeting Semester Genap', 'description' => 'Ajang kreativitas antar kelas di akhir semester genap.', 'count' => 5],
            ['title' => 'Study Tour Yogyakarta 2026', 'description' => 'Kunjungan edukasi siswa SMPIT dan SMAIT ke kota pelajar.', 'count' => 5],
            ['title' => 'Milad Perguruan Amaliah ke-9', 'description' => 'Rangkaian acara perayaan hari jadi Perguruan Amaliah.', 'count' => 4],
        ];

        $n = 1;
        foreach ($albums as $album) {
            $a = GalleryAlbum::create([
                'title' => $album['title'],
                'description' => $album['description'],
            ]);

            for ($i = 1; $i <= $album['count']; $i++) {
                $path = "gallery/photos/{$n}.svg";
                $this->image($path, ["Amaliah #{$n}"], 1200, 800, '#065f46', '#34d399');
                GalleryPhoto::create([
                    'gallery_album_id' => $a->id,
                    'photo' => $path,
                    'caption' => $album['title']." - foto {$i}",
                    'order' => $i,
                ]);
                $n++;
            }
        }
    }

    private function seedTestimonials(): void
    {
        Testimonial::query()->delete();

        $data = [
            ['name' => 'Bapak Hendra Wijaya', 'position' => 'Wali Murid SDIT Amaliah',
                'message' => 'Saya sangat bersyukur menyekolahkan anak di SDIT Amaliah. Selain akademiknya bagus, adab dan karakter anak berkembang luar biasa.', 'gender' => 'L'],
            ['name' => 'Ibu Ratna Dewi', 'position' => 'Wali Murid SMPIT Amaliah',
                'message' => 'Guru-gurunya komunikatif dan peduli. Anak saya jadi lebih percaya diri dan rajin beribadah.', 'gender' => 'P'],
            ['name' => 'Muhammad Rizky Ramadhan', 'position' => 'Alumni SMAIT Amaliah 2024',
                'message' => 'Pembinaan di Amaliah membentuk saya menjadi pribadi yang disiplin. Sekarang saya kuliah di jurusan yang saya impikan berkat arahan guru-guru di sini.', 'gender' => 'L'],
            ['name' => 'Bapak Surya Andika', 'position' => 'Pengurus Komite Perguruan',
                'message' => 'Transparansi dan keterlibatan orang tua di sini luar biasa. Komite selalu dilibatkan dalam pengambilan keputusan penting.', 'gender' => 'L'],
            ['name' => 'Ibu Laila Fitriani', 'position' => 'Wali Murid KB-TK Amaliah',
                'message' => 'Anak saya senang sekali sekolah, gurunya sabar dan menyayangi. Fasilitas juga nyaman untuk anak usia dini.', 'gender' => 'P'],
        ];

        foreach ($data as $item) {
            $path = 'testimonials/'.Str::slug($item['name']).'.svg';
            $this->image($path, [Str::title($item['name'])], 400, 400, '#0f766e', '#2dd4bf', true);
            Testimonial::create([
                'name' => $item['name'],
                'position' => $item['position'],
                'message' => $item['message'],
                'photo' => $path,
                'is_active' => true,
            ]);
        }
    }

    private function seedBanners(): void
    {
        HomepageBanner::query()->delete();

        $data = [
            ['title' => 'Selamat Datang di Perguruan Amaliah', 'sort' => 1,
                'description' => 'Lembaga pendidikan Islam terpadu dari KB-TK hingga SMA dan Pesantren Tahfidz. Mencerdaskan, berakhlak, dan berprestasi.',
                'button_text' => 'Tentang Kami', 'button_link' => '/tentang'],
            ['title' => 'PPDB Tahun Ajaran 2026/2027 Telah Dibuka', 'sort' => 2,
                'description' => 'Segera daftarkan putra-putri Anda. Pendaftaran gelombang kedua masih terbuka untuk semua jenjang.',
                'button_text' => 'Daftar PPDB', 'button_link' => '/ppdb'],
            ['title' => 'Raih Prestasi Bersama Kami', 'sort' => 3,
                'description' => 'Berbagai kegiatan akademik, tahfidz, dan pengembangan bakat siap menemani tumbuh kembang ananda.',
                'button_text' => 'Lihat Berita', 'button_link' => '/berita'],
        ];

        foreach ($data as $i => $item) {
            $path = "homepage/banners/banner-{$item['sort']}.svg";
            $this->image($path, [Str::title($item['title'])], 1400, 600, '#065f46', '#10b981');
            HomepageBanner::create([
                'title' => $item['title'],
                'description' => $item['description'],
                'image' => $path,
                'button_text' => $item['button_text'],
                'button_link' => $item['button_link'],
                'is_active' => true,
                'sort_order' => $item['sort'],
            ]);
        }
    }

    private function seedFoundation(): void
    {
        FoundationLeader::query()->delete();
        FoundationOrganization::query()->delete();

        $leaders = [
            ['name' => 'Prof. Dr. KH. Ahmad Munir, M.A.', 'position' => 'Ketua Pembina', 'period' => '2010 – sekarang',
                'message' => 'Semoga Perguruan Amaliah senantiasa menjadi lentera pendidikan Islam yang mencerahkan umat.'],
            ['name' => 'Drs. H. Hasan Basri, M.M.', 'position' => 'Ketua Yayasan', 'period' => '2015 – sekarang',
                'message' => 'Yayasan berkomitmen memberikan layanan pendidikan terbaik dan terjangkau bagi masyarakat.'],
            ['name' => 'Ust. Abdul Karim, Lc.', 'position' => 'Pengawas Yayasan', 'period' => '2018 – sekarang',
                'message' => 'Mendampingi seluruh unit pendidikan agar tetap istiqomah dalam menjaga mutu dan nilai-nilai keislaman.'],
        ];

        foreach ($leaders as $item) {
            $path = 'foundation/leaders/'.Str::slug($item['name']).'.svg';
            $this->image($path, [$item['name']], 400, 480, '#065f46', '#34d399');
            FoundationLeader::create([
                ...$item,
                'photo' => $path,
                'is_active' => true,
            ]);
        }

        $orgs = [
            ['name' => 'Drs. H. Hasan Basri, M.M.', 'position' => 'Ketua Yayasan'],
            ['name' => 'Hj. Sumiyati, S.E.', 'position' => 'Wakil Ketua'],
            ['name' => 'Drs. Ahmad Syafei', 'position' => 'Sekretaris'],
            ['name' => 'H. Udin Ramdani, S.E.', 'position' => 'Bendahara'],
            ['name' => 'Drs. H. Abdullah Hakim, M.Pd.', 'position' => 'Kepala Sekolah Perwakilan'],
            ['name' => 'Sri Handayani, M.Pd.', 'position' => 'Koordinator SDM & Sarana'],
        ];

        foreach ($orgs as $i => $item) {
            $path = 'foundation/organizations/'.Str::slug($item['name']).'.svg';
            $this->image($path, [Str::title($item['name'])], 400, 400, '#047857', '#34d399', '#7c3aed');
            FoundationOrganization::create([
                ...$item,
                'photo' => $path,
                'order' => $i + 1,
                'is_active' => true,
            ]);
        }
    }

    private function seedAbout(): void
    {
        About::query()->delete();

        $this->image('abouts/gedung.svg', ['Kampus Perguruan Amaliah'], 1200, 700, '#065f46', '#10b981');

        About::create([
            'title' => 'Tentang Perguruan Amaliah',
            'description' => 'Perguruan Amaliah merupakan lembaga pendidikan Islam terpadu yang menaungi lima unit pendidikan: KB-TK, SDIT, SMPIT, SMAIT, dan Pesantren Tahfidz.',
            'history' => 'Perguruan Amaliah berdiri pada tahun 2016. Berawal dari majelis taklim dan taman belajar kecil, kini berkembang menjadi perguruan pendidikan Islam terpadu yang terpercaya.',
            'vision' => "Terwujudnya generasi Qur'ani yang unggul dalam prestasi, berkarakter mulia, serta mampu bersaing secara global.",
            'mission' => "1. Menyelenggarakan pembelajaran yang menyenangkan dan bermakna.\n2. Membiasakan ibadah dan akhlak mulia.\n3. Mengembangkan potensi peserta didik.\n4. Membangun kemitraan dengan orang tua dan masyarakat.",
            'image' => 'abouts/gedung.svg',
            'established' => '2016',
            'is_active' => true,
        ]);
    }

    private function seedPpdb(): void
    {
        Ppdb::query()->delete();

        $smait = $this->units['SMAIT Amaliah'];
        $sdit = $this->units['SDIT Amaliah'];

        Ppdb::create([
            'education_unit_id' => $smait->id,
            'title' => 'PPDB SMAIT Amaliah Tahun Ajaran 2026/2027',
            'academic_year' => '2026/2027',
            'description' => 'Penerimaan Peserta Didik Baru SMAIT Amaliah dengan program unggulan tahfidz dan BKDA (Bina Karakter dan Da\'i).',
            'requirements' => "1. Fotokopi akta kelahiran.\n2. Fotokopi kartu keluarga.\n3. Surat keterangan lulus / rapor SMP sederajat.\n4. Pas foto 3x4 sebanyak 4 lembar.\n5. Mengisi formulir pendaftaran secara online.",
            'registration_link' => 'https://forms.gle/example-smait-2027',
            'schedule' => "Gelombang 1: 1 Agustus – 30 September 2026\nGelombang 2: 1 Oktober – 30 November 2026\nTes seleksi: 5 Desember 2026\nDaftar ulang: 12 – 14 Desember 2026",
            'registration_start' => '2026-08-01',
            'registration_end' => '2026-11-30',
            'registration_fee' => 3000000,
            'registration_url' => 'https://forms.gle/example-smait-2027',
            'contact' => "Panitia PPDB SMAIT\n0812-3456-7890\nppdb@smait.perguruanamaliah.sch.id",
            'status' => 'open',
            'is_published' => true,
        ]);

        Ppdb::create([
            'education_unit_id' => $sdit->id,
            'title' => 'PPDB SDIT Amaliah Tahun Ajaran 2026/2027',
            'academic_year' => '2026/2027',
            'description' => 'Penerimaan Peserta Didik Baru SDIT Amaliah kelas 1 dengan program tahfidz dan bilingual.',
            'requirements' => "1. Fotokopi akta kelahiran.\n2. Fotokopi kartu keluarga.\n3. Fotokopi riwayat imunisasi.\n4. Pas foto 3x4 sebanyak 4 lembar.",
            'registration_link' => 'https://forms.gle/example-sdit-2027',
            'schedule' => "Gelombang 1: 1 Agustus – 30 September 2026\nGelombang 2: 1 Oktober – 30 November 2026",
            'registration_start' => '2026-08-01',
            'registration_end' => '2026-11-30',
            'registration_fee' => 1500000,
            'registration_url' => 'https://forms.gle/example-sdit-2027',
            'contact' => "Panitia PPDB SDIT\n0812-3456-7890\nppdb@sdit.perguruanamaliah.sch.id",
            'status' => 'upcoming',
            'is_published' => true,
        ]);
    }

    /**
     * Generate a simple SVG placeholder image into the public storage disk.
     */
    private function image(
        string $path,
        array $lines,
        int $width,
        int $height,
        string $bg,
        ?string $bg2 = null,
        bool $circle = false,
    ): void {
        $gradient = $bg2 ?? $bg;
        $fontSize = max(28, (int) round(min($width, $height) / (count($lines) + 1)));
        $lineHeight = $fontSize * 1.4;
        $totalText = count($lines) * $lineHeight;
        $startY = ($height - $totalText) / 2 + $fontSize / 2;

        $svg = "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"{$width}\" height=\"{$height}\" viewBox=\"0 0 {$width} {$height}\">";
        $svg .= '<defs><linearGradient id="g" x1="0" y1="0" x2="1" y2="1">';
        $svg .= "<stop offset=\"0\" stop-color=\"{$bg}\"/>";
        $svg .= "<stop offset=\"1\" stop-color=\"{$gradient}\"/>";
        $svg .= '</linearGradient></defs>';
        $svg .= "<rect width=\"{$width}\" height=\"{$height}\" fill=\"url(#g)\"/>";

        if ($circle) {
            $d = min($width, $height) * 0.55;
            $svg .= '<circle cx="'.($width / 2).'" cy="'.($height / 2)."\" r=\"$d\" fill=\"rgba(255,255,255,0.12)\"/>";
        }

        $svg .= '<rect x="'.($width * 0.05).'" y="'.($height * 0.05).'" width="'.($width * 0.9).'" height="'.($height * 0.9).'" rx="24" fill="none" stroke="rgba(255,255,255,0.35)" stroke-width="6"/>';

        foreach ($lines as $i => $line) {
            if ($line === '') {
                continue;
            }
            $y = $startY + $i * $lineHeight;
            $svg .= "<text x=\"50%\" y=\"{$y}\" text-anchor=\"middle\" font-family=\"Arial, sans-serif\" font-size=\"{$fontSize}\" font-weight=\"bold\" fill=\"#ffffff\">".htmlspecialchars(Str::limit($line, 60), ENT_QUOTES).'</text>';
        }

        $svg .= '</svg>';

        Storage::disk('public')->put($path, $svg);
    }
}
