@extends('layouts.main')


@section('data')

<div class="section-body">
          
                <div class="card">
                  <div class="card-header">
                    <h4>All Posts</h4>
                  </div>
                  <div class="card-body">
                    <div class="float-left">
                      <select class="form-control selectric">
                        <option>Action For Selected</option>
                        <option>Move to Draft</option>
                        <option>Move to Pending</option>
                        <option>Delete Pemanently</option>
                      </select>
                    </div>
                    <div class="float-right">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-append">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th class="text-center pt-2">
                          </th>
                          <th>Nama</th>
                          <th>Kelas</th>
                          <th>NIS</th>
                          <th>Tanggal Lahir</th>
                        </tr>
                        <tr>
                          <td>
                          </td>
                          <td>INI UNTUK NAMA
                            <div class="table-links">
                              <a href="#">View</a>
                              <div class="bullet"></div>
                              <a href="#">Edit</a>
                              <div class="bullet"></div>
                              <a href="#" class="text-danger">Trash</a>
                            </div>
                          </td>
                          <td>
                            <a href="#">INI UNTUK KELAS</a>
                            
                          </td>
                          <td>
                            <a href="#">
                              <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="title" title=""> 
                              <div class="d-inline-block ml-1">INI UNTUK NAMA</div>
                            </a>
                          </td>
                          <td>INI UNTUK TANGGAL LAHIRS</td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        

        @endsection