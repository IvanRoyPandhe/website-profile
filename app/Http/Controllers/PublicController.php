<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use App\Models\Kurikulum;
use App\Models\Kontak;
use App\Models\Berita;
use App\Models\Agenda;
use App\Models\VisiMisi;
use App\Models\StrukturOrganisasi;
use App\Models\ProspekLulusan;
use App\Models\BiayaPendidikan;
use App\Models\KurikulumContent;
use App\Models\KalenderAkademik;
use App\Models\JadwalKuliah;
use App\Models\PrestasiMahasiswa;
use App\Models\SurveyPengguna;
use App\Models\KegiatanHima;
use App\Models\KegiatanIkahima;
use App\Models\Akreditasi;
use App\Models\Kebijakan;
use App\Models\Penelitian;
use App\Models\Pengabdian;
use App\Models\PublikasiJurnal;
use App\Models\MonitoringEvaluasi;
use App\Models\RencanaTindakLanjut;
use App\Models\Survey;
use App\Models\HomeContent;
use App\Models\AboutSection;
use App\Models\WhyChooseSection;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        $heroStats = HomeContent::active()->bySection('hero_stats')->ordered()->get();
        $aboutStats = HomeContent::active()->bySection('about_stats')->ordered()->get();
        $aboutFeatures = HomeContent::active()->bySection('about_features')->ordered()->get();
        $whyChoose = HomeContent::active()->bySection('why_choose')->ordered()->get();
        $ctaTrust = HomeContent::active()->bySection('cta_trust')->ordered()->get();
        $aboutSection = AboutSection::active()->first();
        $whyChooseSection = WhyChooseSection::active()->first();
        
        return view('public.home', compact('heroStats', 'aboutStats', 'aboutFeatures', 'whyChoose', 'ctaTrust', 'aboutSection', 'whyChooseSection'));
    }

    // Profile Menu Methods
    public function visiMisi()
    {
        $visiMisi = VisiMisi::active()->first();
        return view('public.profile.visi-misi', compact('visiMisi'));
    }

    public function strukturOrganisasi()
    {
        $struktur = StrukturOrganisasi::active()->ordered()->get();
        return view('public.profile.struktur-organisasi', compact('struktur'));
    }

    public function profileDosen()
    {
        $staff = Lecturer::active()->ordered()->get();
        return view('public.profile.profile-dosen', compact('staff'));
    }

    public function prospekLulusan()
    {
        $prospekLulusan = ProspekLulusan::active()->byCategory('lulusan')->ordered()->get();
        $prospekKerja = ProspekLulusan::active()->byCategory('kerja')->ordered()->get();
        return view('public.profile.prospek-lulusan', compact('prospekLulusan', 'prospekKerja'));
    }

    public function biayaPendidikan()
    {
        $biayaPendidikan = BiayaPendidikan::active()->ordered()->get();
        return view('public.profile.biaya-pendidikan', compact('biayaPendidikan'));
    }

    // Akademik Menu Methods
    public function kurikulum()
    {
        $kurikulumContent = KurikulumContent::active()->ordered()->get();
        return view('public.akademik.kurikulum', compact('kurikulumContent'));
    }

    public function kalenderAkademik()
    {
        $kalenderAkademik = KalenderAkademik::active()->ordered()->get();
        return view('public.akademik.kalender-akademik', compact('kalenderAkademik'));
    }

    public function jadwalKuliah()
    {
        $jadwalKuliah = JadwalKuliah::active()->ordered()->get();
        return view('public.akademik.jadwal-kuliah', compact('jadwalKuliah'));
    }

    // Kemahasiswaan Menu Methods
    public function hima()
    {
        $kegiatanByPeriode = KegiatanHima::active()
            ->orderBy('periode', 'desc')
            ->orderBy('created_at')
            ->get()
            ->groupBy('periode');
        
        return view('public.kemahasiswaan.hima', compact('kegiatanByPeriode'));
    }

    public function ikahima()
    {
        $kegiatanByPeriode = KegiatanIkahima::active()
            ->orderBy('periode', 'desc')
            ->orderBy('created_at')
            ->get()
            ->groupBy('periode');
        
        return view('public.kemahasiswaan.ikahima', compact('kegiatanByPeriode'));
    }

    public function prestasiMahasiswa()
    {
        $prestasi = PrestasiMahasiswa::active()->orderBy('created_at', 'desc')->get();
        return view('public.kemahasiswaan.prestasi-mahasiswa', compact('prestasi'));
    }

    public function surveyPengguna()
    {
        $surveys = SurveyPengguna::active()->ordered()->get();
        return view('public.kemahasiswaan.survey-pengguna', compact('surveys'));
    }

    // Dokumen Menu Methods
    public function akreditasi()
    {
        $akreditasi = Akreditasi::active()->ordered()->get();
        return view('public.dokumen.akreditasi', compact('akreditasi'));
    }

    public function kebijakan()
    {
        $kebijakanByCluster = Kebijakan::active()
            ->orderBy('cluster')
            ->orderBy('sub_cluster')
            ->orderBy('nomor')
            ->get()
            ->groupBy(['cluster', 'sub_cluster']);
        
        return view('public.dokumen.kebijakan', compact('kebijakanByCluster'));
    }

    // Publikasi Menu Methods
    public function penelitian()
    {
        $penelitianByTahun = Penelitian::active()
            ->orderBy('tahun', 'desc')
            ->orderBy('nomor')
            ->get()
            ->groupBy('tahun');
        
        return view('public.publikasi.penelitian', compact('penelitianByTahun'));
    }

    public function pengabdian()
    {
        $pengabdianByTahun = Pengabdian::active()
            ->orderBy('tahun', 'desc')
            ->orderBy('nomor')
            ->get()
            ->groupBy('tahun');
        
        return view('public.publikasi.pengabdian', compact('pengabdianByTahun'));
    }

    public function publikasiJurnal()
    {
        $publikasiJurnal = PublikasiJurnal::active()->ordered()->get();
        return view('public.publikasi.publikasi-jurnal', compact('publikasiJurnal'));
    }

    // Informasi Menu Methods
    public function berita(Request $request)
    {
        $query = Berita::published();
        
        if ($request->category) {
            $query->where('category', $request->category);
        }
        
        if ($request->search) {
            $query->where(function($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('excerpt', 'like', '%' . $request->search . '%');
            });
        }
        
        $news = $query->orderBy('published_at', 'desc')->paginate(9);
        $featuredNews = Berita::published()->featured()->orderBy('published_at', 'desc')->limit(3)->get();
        $categories = ['general', 'academic', 'events', 'achievements', 'announcements'];
        
        return view('public.informasi.berita', compact('news', 'featuredNews', 'categories'));
    }

    public function beritaDetail(Berita $berita)
    {
        if (!$berita->is_published || $berita->published_at > now()) {
            abort(404);
        }
        
        $berita->increment('views');
        $relatedNews = Berita::published()
            ->where('id', '!=', $berita->id)
            ->where('category', $berita->category)
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();
            
        return view('public.informasi.berita-detail', compact('berita', 'relatedNews'))->with('news', $berita);
    }

    public function agenda()
    {
        $agenda = Agenda::active()
            ->orderBy('start_date', 'asc')
            ->get();
        
        return view('public.informasi.agenda', compact('agenda'));
    }

    public function kontak()
    {
        return view('public.informasi.kontak');
    }

    public function kontakSubmit(\App\Http\Requests\KontakRequest $request)
    {
        Kontak::create($request->validated());

        return redirect()->route('kontak')->with('success', 'Terima kasih atas pesan Anda. Kami akan segera menghubungi Anda!');
    }

    // Penjaminan Menu Methods
    public function monitoringEvaluasi()
    {
        $monitoringByCluster = MonitoringEvaluasi::active()
            ->orderBy('cluster')
            ->orderBy('sub_cluster')
            ->orderBy('periode')
            ->get()
            ->groupBy(['cluster', 'sub_cluster']);
        
        return view('public.penjaminan.monitoring-evaluasi', compact('monitoringByCluster'));
    }

    public function rencanaTindakLanjut()
    {
        $rtlByCluster = RencanaTindakLanjut::active()
            ->orderBy('cluster')
            ->orderBy('sub_cluster')
            ->orderBy('periode')
            ->get()
            ->groupBy(['cluster', 'sub_cluster']);
        
        return view('public.penjaminan.rencana-tindak-lanjut', compact('rtlByCluster'));
    }

    public function survei()
    {
        $surveys = Survey::active()->ordered()->get();
        return view('public.penjaminan.survei', compact('surveys'));
    }
}