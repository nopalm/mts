<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\SendMail;

use Illuminate\Support\Facades\Mail;

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;

use Illuminate\Support\Facades\Storage;

use App\About;

use App\Gallery;

use App\Kontak;

use App\Service;

use App\Slider;

use App\Partner;

use App\Guru;

use App\Berita;

use App\Pengumuman;

use App\Agenda;

use App\Siswa;

use App\Download;


class IndexController extends Controller
{
    public function index(){
        $ab = About::all();
        $galeri = Gallery::all();
        $kontak = Kontak::all();
        $service = Service::all();
        $slider = Slider::all();
        $partner = Partner::all();
        $pengumuman = Pengumuman::paginate(2);
        $siswa = Siswa::all();
        return view('welcome2',['kontak'=>$kontak,'ab'=>$ab,'galeri'=>$galeri,'service'=>$service,'slider'=>$slider,'partner'=>$partner,'siswa'=>$siswa,'pengumuman'=>$pengumuman]);
    }
    function send(Request $request){
        Mail::send(new SendMail($request));
        return redirect('/');
    }
    
    public function landingAbout(){
        $ab = About::all();
        $kontak = Kontak::all();
        return view('landing_about',['kontak'=>$kontak,'ab'=>$ab]);
    }

    public function landingGaleri(){
        $ab = About::all();
        // $galeri = Gallery::all();
        $galeri = Gallery::paginate(4);
        $kontak = Kontak::all();
        return view('landing_galeri',['kontak'=>$kontak,'galeri'=>$galeri,'ab'=>$ab]);
    }

    public function landingDetailGaleri($id){
        $ab = About::all();
        // $guru = Guru::all();
        $galeri = Gallery::findOrFail($id);
        $kontak = Kontak::all();
        return view('landing_detail_galeri',['kontak'=>$kontak,'ab'=>$ab,'galeri'=>$galeri]);
    }

    public function landingContact(){
        $ab = About::all();
        $kontak = Kontak::all();
        return view('landing_contact',['kontak'=>$kontak,'ab'=>$ab]);
    }
    public function landingGuru(){
        $ab = About::all();
        // $guru = Guru::all();
        $guru = Guru::paginate(4);
        $kontak = Kontak::all();
        return view('landing_guru',['kontak'=>$kontak,'ab'=>$ab,'guru'=>$guru]);
    }
    public function landingBerita(){
        $ab = About::all();
        // $guru = Guru::all();
        $berita = Berita::paginate(4);
        $kontak = Kontak::all();
        return view('landing_berita',['kontak'=>$kontak,'ab'=>$ab,'berita'=>$berita]);
    }
    public function landingDetailBerita($id){
        $ab = About::all();
        // $guru = Guru::all();
        $berita = Berita::findOrFail($id);
        $kontak = Kontak::all();
        return view('landing_detail_berita',['kontak'=>$kontak,'ab'=>$ab,'berita'=>$berita]);
    }

    public function landingPengumuman(){
        $ab = About::all();
        // $guru = Guru::all();
        $pengumuman = Pengumuman::paginate(4);
        $kontak = Kontak::all();
        return view('landing_pengumuman',['kontak'=>$kontak,'ab'=>$ab,'pengumuman'=>$pengumuman]);
    }

    public function landingDetailPengumuman($id){
        $ab = About::all();
        // $guru = Guru::all();
        $pengumuman = Pengumuman::findOrFail($id);
        $kontak = Kontak::all();
        return view('landing_detail_pengumuman',['kontak'=>$kontak,'ab'=>$ab,'pengumuman'=>$pengumuman]);
    }

    public function landingAgenda(){
        $ab = About::all();
        // $guru = Guru::all();
        $agenda = Agenda::paginate(4);
        $kontak = Kontak::all();
        return view('landing_agenda',['kontak'=>$kontak,'ab'=>$ab,'agenda'=>$agenda]);
    }

    public function landingDetailAgenda($id){
        $ab = About::all();
        // $guru = Guru::all();
        $agenda = Agenda::findOrFail($id);
        $kontak = Kontak::all();
        return view('landing_detail_agenda',['kontak'=>$kontak,'ab'=>$ab,'agenda'=>$agenda]);
    }

    public function landingSiswa(){
        $ab = About::all();
        // $guru = Guru::all();
        $siswa = Siswa::paginate(4);
        $kontak = Kontak::all();
        return view('landing_siswa',['kontak'=>$kontak,'ab'=>$ab,'siswa'=>$siswa]);
    }

    public function landingDetailSiswa($id){
        $ab = About::all();
        // $guru = Guru::all();
        $siswa = Siswa::findOrFail($id);
        $kontak = Kontak::all();
        return view('landing_detail_siswa',['kontak'=>$kontak,'ab'=>$ab,'siswa'=>$siswa]);
    }

    public function landingDownload(){
        $ab = About::all();
        // $guru = Guru::all();
        $download = Download::paginate(4);
        $kontak = Kontak::all();
        return view('landing_download',['kontak'=>$kontak,'ab'=>$ab,'download'=>$download]);
    }

    public function downloadFile($id){
        $download = Download::findOrFail($id);
        $filename = '$download->filedown';
        $tempImage = tempnam(sys_get_temp_dir(), $filename);
        copy('http://localhost/backup/public/storage/imagedown/.$download->filedown', $tempImage);

        return response()->download($tempImage, $filename);
    }
    
    // function send(Request $request)
    // {
    //  $this->validate($request, [
    //   'name'     =>  'required',
    //   'email'  =>  'required|email',
    //   'message' =>  'required'
    //  ]);

    //     $data = array(
    //         'name'      =>  $request->name,
    //         'message'   =>   $request->message
    //     );

    //  Mail::to('nopaliki@gmail.com')->send(new SendMail($data));
    //  return redirect()->back()->with('success', 'Thanks for contacting us!');

    // }

    // function sendMail(Request $request){
    //     $subject = "Contact dari " . $request->input('name');
    //     $name = $request->input('name');
    //     $emailAddress = $request->input('email');
    //     $message = $request->input('message');

    //     $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    //     try {
    //         // Pengaturan Server
    //        // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    //         $mail->isSMTP();                                      // Set mailer to use SMTP
    //         $mail->Host = 'smtp.gmail.com';                  // Specify main and backup SMTP servers
    //         $mail->SMTPAuth = true;                               // Enable SMTP authentication
    //         $mail->Username = 'nopaliki@gmail.com';                 // SMTP username
    //         $mail->Password = 'naufal6312';                           // SMTP password
    //         $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    //         $mail->Port = 465;                                    // TCP port to connect to

    //         // Siapa yang mengirim email
    //         $mail->setFrom($emailAddress, $name);

    //         // Siapa yang akan menerima email
    //         $mail->addAddress('nopaliki@gmail.com');     // Add a recipient
    //         // $mail->addAddress('ellen@example.com');               // Name is optional

    //         // ke siapa akan kita balas emailnya
    //         $mail->addReplyTo($emailAddress, $name);
            
    //         // $mail->addCC('cc@example.com');
    //         // $mail->addBCC('bcc@example.com');

    //         //Attachments
    //         // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //         // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


    //         //Content
    //         $mail->isHTML(true);                                  // Set email format to HTML
    //         $mail->Subject = $subject;
    //         $mail->Body    = $message;
    //         $mail->AltBody = $message;

    //         $mail->send();

    //         $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
    //         return redirect('./');

    //     } catch (Exception $e) {
    //         echo 'Message could not be sent.';
    //         echo 'Mailer Error: ' . $mail->ErrorInfo;
    //     }

    // }
}

