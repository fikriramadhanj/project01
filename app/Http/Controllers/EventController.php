<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use resources\view\kalender;


class EventController extends Controller
{

      public function showAllData()
      {

          $events = Event::all();
          return view('showAllEvent', [
            'events' => $events
            ]);

      }
      public function showAddForm()
      {

          return view('eventFormAdd');

      }

      public function addData(Request $request)
      {

          $event= new Event;
          $event->id=$request->id;
          $event->tgl=$request->tanggal;
          $event->nama=$request->nama;
          $event->deskripsi=$request->deskripsi;
          $event->save();

          return redirect()->action('EventController@showAllData');

      }

      public function updateData(Request $request)
      {
          $event = Event::find($request->id);
          $event->tgl = $request->tanggal;
          $event->nama = $request->nama;
          $event->deskripsi = $request->deskripsi;

          $event->save();

          return redirect()->action('EventController@showAllData');


      }
      public function showUpdateForm($id)
      {
          $event = Event::find($id);
          return view('eventFormUpdate', [
            'update' => $event
            ]);

      }
      public function deleteData(Request $request)
      {
        $event = Event::find($request->id);
        $event->delete();

        return redirect()->action('EventController@showAllData');
      }

      public function showCalender(Request $request)
      {
            $bulan = $request->month ?: date('n');
            $tahun = $request->year ?: date('Y');

            $awalBulan = $tahun .'-'. $bulan .'-' . '01';
            $jumlahHari = date('t', strtotime($awalBulan));
            $akhirBulan = $tahun.'-'. $bulan .'-'. $jumlahHari;

            $tglawal=date('Y-m-d', strtotime($awalBulan));
            $tglakhir=date('Y-m-d', strtotime($akhirBulan));

            if($request->$day)
            {
                    $events=Event::where('tgl', '>=',$tglawal)
                    ->where('tgl','<=',$tglakhir)->get();
            }
            else
            {
                  $day=$request->day;
                  $events=Event::where('tgl',$tahun,$bulan,$day)->get();
            }


            $monthNames = Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli",
            "Agustus", "September", "Oktober", "November", "Desember");


            $cMonth = $bulan;
            $cYear = $tahun;

            $prev_year = $cYear;
            $next_year = $cYear;
            $prev_month = (int)$cMonth-1;
            $next_month = (int)$cMonth+1;

            if ($prev_month == 0 ) {
              $prev_month = 12;
              $prev_year = $cYear - 1;
            }
            if ($next_month == 13 ) {
              $next_month = 1;
              $next_year = $cYear + 1;
            }


            return view("kalender",[
              'kalender' => $events,
              'prev_month'=>$prev_month,
              'prev_year'=>$prev_year,
              'next_month'=>$next_month,
              'next_year'=>$next_year,
              'cMonth'=>$cMonth,
              'cYear'=>$cYear,
              'monthNames' => $monthNames,
              'day' => $request->$day
              ]);


        }













}
