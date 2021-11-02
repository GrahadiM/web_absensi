@extends('layouts.index')
@section('title', 'Absensi Masuk')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Absen Masuk
            </div>
            <div class="card-body"><form class="form-a" action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-12 col-lg-6 mb-1">
                    <div class="form-group">
                      <label for="NIP">NIP :</label>
                      <select name="user_id" id="NIP" class="custom-select form-control-lg form-control-a">
                          <option value="#" selected>-- Select --</option>
                          @forelse ($pegawais as $pegawai)
                          <option value="{{ $pegawai->id }}">{{ $pegawai->nip }}</option>
                          @empty
                          <option value="#" selected>-- Select --</option>
                          @endforelse
                      </select>
                    </div>
                  </div>
                  {{-- <div class="col-md-12 col-lg-6 mb-1">
                    <div class="form-group">
                      <label for="name">NIP :</label>
                      <input name="user_id" type="text" class="form-control form-control-lg form-control-a" id="name"
                        placeholder="NIP Anda *" required>
                    </div>
                  </div> --}}
                  <div class="col-md-12 col-lg-6 mb-1">
                    <div class="form-group">
                        <label for="inputTotalFamily">Status Masuk :</label>
                        <select name="status" id="inputTotalFamily" class="custom-select form-control-lg form-control-a">
                            <option value="#" selected>-- Select --</option>
                            <option value="hadir">Hadir</option>
                            <option value="terlambat">Terlambat</option>
                            <option value="ijin">Ijin</option>
                            <option value="cuti">Cuti</option>
                            <option value="sakit">Sakit</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-12 mb-1">
                    <div class="form-group">
                      <label for="message">Pesan :</label>
                      <textarea name="message" type="text" cols="45" rows="8" class="form-control" id="message"
                        placeholder="Pesan Anda *" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
                  </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection
