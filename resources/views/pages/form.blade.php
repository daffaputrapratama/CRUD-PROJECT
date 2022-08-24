@extends('layouts.main')


@section('form')
<div class="card-header">
                    <h4>Input Your Data</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="nama">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kelas</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="kelas">
                          <option>XI RPL 1</option>
                          <option>XI RPL 2</option>
                          <option>DKV 2</option>
                          <option>DKV 2</option>
                        </select>
                      </div>
                    </div>

                 
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIS</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" name="nis">
                      </div>
                    </div>

                     
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control inputtags" name="date">
                      </div>
                    </div>
                   
                
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Create Post</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    @endsection