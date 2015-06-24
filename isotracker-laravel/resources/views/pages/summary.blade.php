@extends('default')

@section('header')
  Summary
@stop

@section('content')
    
    <div class="row">
      <div class="col-lg-8">

        <ol class="breadcrumb">
          <li class="active"><a href="#">Documents</a>
          </li>
          <li><a href="#complaints">Complaints</a>
          </li>
          <li><a href="#audit">Audit</a>
          </li>
          <li><a href="#competency">Competency</a>
          </li>
          <li><a href="#nc">NC</a>
          </li>
          <li><a href="#car">CAR</a>
          </li>
          <li><a href="#par">PAR</a>
          </li>
        </ol>
      </div>
    </div>

    <div class = "row">
      <div class="col-lg-8">
        <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Document</th>
                <th>User</th>
                                    <th>Date Created</th>
                                    <th>Last Edited</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Document1</td>
                                    <td>Admin</td>
                                    <td>Jun-19-2015</td>
                                    <td>Jun-20-2015</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
      </div>

      <div class="col-lg-4">
        <div class="row">
          <div class="panel panel-info">
            <div class="panel-heading">
                  <div class="row">
                    <div class="col-lg-6">
                      Named Users
                    </div>

                    <div class="col-lg-6">
                      <b>1 of 100 users</b>
                    </div>
                  </div>
              </div>
            </div>
          </div>

        <div class="row">
          <div class="panel panel-info">
            <div class="panel-heading">
                 <div class="row">
                   <div class="col-lg-6">
                     Storage Space
                   </div>

                   <div class="col-lg-6">
                     <b>0 of 2 GB</b>
                   </div>
                 </div>
             </div>
           </div>
        </div>

        <div class="row">
          <div class="panel panel-info">
            <div class="panel-heading">
                 <div class="row">
                   <div class="col-lg-6">
                     Last Login
                   </div>

                   <div class="col-lg-6">
                     <b>Jun-20-2015 3.45pm</b>
                   </div>
                 </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="row">
    </div>
@stop
