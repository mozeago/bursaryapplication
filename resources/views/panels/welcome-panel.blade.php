@php

    $levelAmount = 'level';

    if (Auth::User()->level() >= 2) {
        $levelAmount = 'levels';

    }

@endphp

<div class="card">
    <div class="card-header @role('admin', true) bg-secondary text-white @endrole">

        Welcome {{ Auth::user()->name }}

        @role('admin', true)
            <span class="pull-right badge badge-primary" style="margin-top:4px">
                Admin Access
            </span>
        @else
            <span class="pull-right badge badge-warning" style="margin-top:4px">
                User Access
            </span>
        @endrole

    </div>
    <div class="card-body">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">{{ trans('bursaryapplicationlinks.wardBursaryApplication') }}</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">{{ trans('bursaryapplicationlinks.ngcdfBursary') }}</a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">{{ trans('bursaryapplicationlinks.countyBursary') }}</a>
            </div>
        </nav>
    </br>
        <div class="card">
            <div class="card-body">
          <div class="tab-content" id="nav-tabContent">
              <!--ward bursary-->
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal Information</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">School Information</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Bursary Information</a>
                    </li>
                </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    
                        <form class="p-3 m-3" method="post" action="/wardbursary/personalinformation/" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row p-3">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                                <div class="col">
                                    <label for="inputFirstName">First Name</label>
                                  <input id="inputFirstName" name="first_name"  type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col">
                                    <label for="inputMiddlleName">Middle Name</label>
                                  <input id="inputMiddlleName" name="middle_name" type="text" class="form-control" placeholder="Middle Name">
                                </div>
                                <div class="col">
                                    <label for="inputParentName">Family/Parent Name</label>
                                  <input id="inputParentName" name="family_name" type="text" class="form-control" placeholder="Parent Name">
                                </div>
                            </div>
                            <div class="form-row p-3">
                                <div class="col">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="col">
                                    <label for="exampleInputPassword1">ID No. /Birth Certificate Number</label>
                                    <input type="text" name="identifidation_number" class="form-control" id="exampleInputPassword1" placeholder="ID No. /Birth Certificate Number">
                                  </div>
                            </div>
                            <div class="form-row p-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            
                        <form enctype="multipart/form-data" class="p-3 m-3" method="post" action="/wardbursary/schoolinformation/">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                            {{ csrf_field() }}
                            <div class="form-row p-3">
                                <div class="col">
                                    <label for="exampleInputEmail1">School Name</label>
                                    <input name="schoolname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="School Name">
                                </div>
                                <div class="col">
                                    <label for="inputState">School Category</label>
                                    <select name="schoolcategory" id="inputState" class="form-control">
                                      <option selected>Choose...</option>
                                      <option value="Secondary Shool">Secondary Shool</option>
                                      <option value="Polytechnic">Polytechnic</option>
                                      <option value="College">College</option>
                                      <option value="University">University</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="inputMiddlleName">Admission No.</label>
                                  <input name="admissionnumber" id="inputMiddlleName" type="text" class="form-control" placeholder="Admission No.">
                                </div>
                                <div class="col">
                                    <label for="inputParentName">Joined Date</label>
                                  <input name="joineddate" id="inputParentName" type="date" class="form-control" placeholder="Parent Name">
                                </div>
                            </div>
                            <div class="form-row p-3">
                                <div class="col">
                                <label for="inputYearofstudy">Year of Study</label>
                                <input name="yearofadmission" type="number" class="form-control" id="inputYearofstudy" placeholder="Year of Study e.g 1st/2nd/3rd">
                                </div>
                                <div class="col">
                                    <label for="inputDurationOfStudy">Duration of Study</label>
                                    <input name="durationofstudy" type="number" class="form-control" id="inputDurationOfStudy" placeholder="Duration of Study e.g 2 years">
                                  </div>
                                  <div class="col">
                                    <label for="exampleInputPassword1">Course Name</label>
                                    <input name="coursename" type="text" class="form-control" id="exampleInputPassword1" placeholder="Course Name e.g Certificate in Masonry">
                                  </div>
                            </div>
                            <div class="form-row p-3">
                                <div class="col">
                            <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <form enctype="multipart/form-data" class="p-3 m-3" method="post" action="/wardbursary/bursaryinformation/">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                            {{ csrf_field() }}
                            <div class="form-row p-3">
                                <div class="col">
                                    <label for="inputFeebalance">Fee Balance</label>
                                    <input name="feesbalance" type="number" class="form-control" id="inputFeebalance" aria-describedby="emailHelp" placeholder="Fee Balance">
                                    <small id="inputFeebalance" class="form-text text-muted">as per the attached receipt.</small>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Fees receipt (image jpg)</label>
                                        <input name="feesattachmentpath" type="file" class="form-control-file" id="exampleFormControlFile1">
                                      </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Admission Letter (image jpg)</label>
                                        <input name="admissionletterpath" type="file" class="form-control-file" id="exampleFormControlFile1">
                                      </div>
                                </div>
                            </div>
                            <div class="form-row p-3">
                                
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Latest Results (image jpg)</label>
                                        <input name="latestresultspath" type="file" class="form-control-file" id="exampleFormControlFile1">
                                      </div>
                                </div>
                            </div>
                            <div class="form-row p-3">
                                <div class="col">
                            <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
            </div>
            <!-- end ward bursary-->
             <!-- start ng-cdf bursary-->
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <ul class="nav nav-tabs" id="county-bursary-myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="personal-information-tab" data-toggle="tab" href="#personalinformation" role="tab" aria-controls="personalinformation" aria-selected="true">Personal Information</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="school-information-tab" data-toggle="tab" href="#schoolinformationtab" role="tab" aria-controls="schoolinformation" aria-selected="false">School Information</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="bursary-information-tab" data-toggle="tab" href="#bursaryinformation" role="tab" aria-controls="bursaryinformation" aria-selected="false">Bursary Information</a>
                    </li>
                </ul>
                <div class="tab-content" id="countymyTabContent">
                    <div class="tab-pane fade show active" id="personalinformation" role="tabpanel" aria-labelledby="personal-information-tab">
                        <form enctype="multipart/form-data" class="p-3 m-3" method="post" action="/ngcdfbursary/personalinformation/">
                            {{ csrf_field() }}
                            <div class="form-row p-3">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                                <div class="col">
                                    <label for="inputFirstName">First Name</label>
                                  <input id="inputFirstName" name="first_name"  type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col">
                                    <label for="inputMiddlleName">Middle Name</label>
                                  <input id="inputMiddlleName" name="middle_name" type="text" class="form-control" placeholder="Middle Name">
                                </div>
                                <div class="col">
                                    <label for="inputParentName">Family/Parent Name</label>
                                  <input id="inputParentName" name="family_name" type="text" class="form-control" placeholder="Parent Name">
                                </div>
                            </div>
                            <div class="form-row p-3">
                                <div class="col">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="col">
                                    <label for="exampleInputPassword1">ID No. /Birth Certificate Number</label>
                                    <input type="text" name="identifidation_number" class="form-control" id="exampleInputPassword1" placeholder="ID No. /Birth Certificate Number">
                                  </div>
                            </div>
                            <div class="form-row p-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="schoolinformationtab" role="tabpanel" aria-labelledby="school-information-tab">
                        <form enctype="multipart/form-data" class="p-3 m-3" method="post" action="/ngcdfbursary/schoolinformation/">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                            {{ csrf_field() }}
                            <div class="form-row p-3">
                                <div class="col">
                                    <label for="exampleInputEmail1">School Name</label>
                                    <input name="schoolname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="School Name">
                                </div>
                                <div class="col">
                                    <label for="inputState">School Category</label>
                                    <select name="schoolcategory" id="inputState" class="form-control">
                                      <option selected>Choose...</option>
                                      <option value="Secondary Shool">Secondary Shool</option>
                                      <option value="Polytechnic">Polytechnic</option>
                                      <option value="College">College</option>
                                      <option value="University">University</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="inputMiddlleName">Admission No.</label>
                                  <input name="admissionnumber" id="inputMiddlleName" type="text" class="form-control" placeholder="Admission No.">
                                </div>
                                <div class="col">
                                    <label for="inputParentName">Joined Date</label>
                                  <input name="joineddate" id="inputParentName" type="date" class="form-control" placeholder="Parent Name">
                                </div>
                            </div>
                            <div class="form-row p-3">
                                <div class="col">
                                <label for="inputYearofstudy">Year of Study</label>
                                <input name="yearofadmission" type="number" class="form-control" id="inputYearofstudy" placeholder="Year of Study e.g 1st/2nd/3rd">
                                </div>
                                <div class="col">
                                    <label for="inputDurationOfStudy">Duration of Study</label>
                                    <input name="durationofstudy" type="number" class="form-control" id="inputDurationOfStudy" placeholder="Duration of Study e.g 2 years">
                                  </div>
                                  <div class="col">
                                    <label for="exampleInputPassword1">Course Name</label>
                                    <input name="coursename" type="text" class="form-control" id="exampleInputPassword1" placeholder="Course Name e.g Certificate in Masonry">
                                  </div>
                            </div>
                            <div class="form-row p-3">
                                <div class="col">
                            <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="bursaryinformation" role="tabpanel" aria-labelledby="bursary-information-tab">
                        <form enctype="multipart/form-data" class="p-3 m-3" method="post" action="/ngcdfbursary/bursaryinformation/">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                            {{ csrf_field() }}
                            <div class="form-row p-3">
                                <div class="col">
                                    <label for="inputFeebalance">Fee Balance</label>
                                    <input name="feesbalance" type="number" class="form-control" id="inputFeebalance" aria-describedby="emailHelp" placeholder="Fee Balance">
                                    <small id="inputFeebalance" class="form-text text-muted">as per the attached receipt.</small>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Fees receipt (image jpg)</label>
                                        <input name="feesattachmentpath" type="file" class="form-control-file" id="exampleFormControlFile1">
                                      </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Admission Letter (image jpg)</label>
                                        <input name="admissionletterpath" type="file" class="form-control-file" id="exampleFormControlFile1">
                                      </div>
                                </div>
                            </div>
                            <div class="form-row p-3">
                                
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Latest Results (image jpg)</label>
                                        <input name="latestresultspath" type="file" class="form-control-file" id="exampleFormControlFile1">
                                      </div>
                                </div>
                            </div>
                            <div class="form-row p-3">
                                <div class="col">
                            <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
             <!-- end ng-cdf bursary-->
             <!-- start county bursary-->
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="county-personal-tab" data-toggle="tab" href="#countypersonaltab" role="tab" aria-controls="countypersonaltab" aria-selected="true">Personal Information</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="shool-info-tab" data-toggle="tab" href="#shoolinfotab" role="tab" aria-controls="shoolinfotab" aria-selected="false">School Information</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="bursary-information-tab" data-toggle="tab" href="#bursaryinformationtab" role="tab" aria-controls="bursaryinformationtab" aria-selected="false">Bursary Information</a>
                    </li>
                </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="countypersonaltab" role="tabpanel" aria-labelledby="county-personal-tab">
                        <form enctype="multipart/form-data" class="p-3 m-3" method="post" action="/countybursary/personalinformation/">
                            {{ csrf_field() }}
                            <div class="form-row p-3">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                                <div class="col">
                                    <label for="inputFirstName">First Name</label>
                                  <input id="inputFirstName" name="first_name"  type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col">
                                    <label for="inputMiddlleName">Middle Name</label>
                                  <input id="inputMiddlleName" name="middle_name" type="text" class="form-control" placeholder="Middle Name">
                                </div>
                                <div class="col">
                                    <label for="inputParentName">Family/Parent Name</label>
                                  <input id="inputParentName" name="family_name" type="text" class="form-control" placeholder="Parent Name">
                                </div>
                            </div>
                            <div class="form-row p-3">
                                <div class="col">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="col">
                                    <label for="exampleInputPassword1">ID No. /Birth Certificate Number</label>
                                    <input type="text" name="identifidation_number" class="form-control" id="exampleInputPassword1" placeholder="ID No. /Birth Certificate Number">
                                  </div>
                            </div>
                            <div class="form-row p-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="shoolinfotab" role="tabpanel" aria-labelledby="shool-info-tab">
            
                        <form enctype="multipart/form-data" class="p-3 m-3" method="post" action="/countybursary/schoolinformation/">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                            {{ csrf_field() }}
                            <div class="form-row p-3">
                                <div class="col">
                                    <label for="exampleInputEmail1">School Name</label>
                                    <input name="schoolname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="School Name">
                                </div>
                                <div class="col">
                                    <label for="inputState">School Category</label>
                                    <select name="schoolcategory" id="inputState" class="form-control">
                                      <option selected>Choose...</option>
                                      <option value="Secondary Shool">Secondary Shool</option>
                                      <option value="Polytechnic">Polytechnic</option>
                                      <option value="College">College</option>
                                      <option value="University">University</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="inputMiddlleName">Admission No.</label>
                                  <input name="admissionnumber" id="inputMiddlleName" type="text" class="form-control" placeholder="Admission No.">
                                </div>
                                <div class="col">
                                    <label for="inputParentName">Joined Date</label>
                                  <input name="joineddate" id="inputParentName" type="date" class="form-control" placeholder="Parent Name">
                                </div>
                            </div>
                            <div class="form-row p-3">
                                <div class="col">
                                <label for="inputYearofstudy">Year of Study</label>
                                <input name="yearofadmission" type="number" class="form-control" id="inputYearofstudy" placeholder="Year of Study e.g 1st/2nd/3rd">
                                </div>
                                <div class="col">
                                    <label for="inputDurationOfStudy">Duration of Study</label>
                                    <input name="durationofstudy" type="number" class="form-control" id="inputDurationOfStudy" placeholder="Duration of Study e.g 2 years">
                                  </div>
                                  <div class="col">
                                    <label for="exampleInputPassword1">Course Name</label>
                                    <input name="coursename" type="text" class="form-control" id="exampleInputPassword1" placeholder="Course Name e.g Certificate in Masonry">
                                  </div>
                            </div>
                            <div class="form-row p-3">
                                <div class="col">
                            <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="bursaryinformationtab" role="tabpanel" aria-labelledby="bursary-information-tab">
                        <form enctype="multipart/form-data" class="p-3 m-3" method="post" action="/countybursary/bursaryinformation/">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                            {{ csrf_field() }}
                            <div class="form-row p-3">
                                <div class="col">
                                    <label for="inputFeebalance">Fee Balance</label>
                                    <input name="feesbalance" type="number" class="form-control" id="inputFeebalance" aria-describedby="emailHelp" placeholder="Fee Balance">
                                    <small id="inputFeebalance" class="form-text text-muted">as per the attached receipt.</small>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Fees receipt (image jpg)</label>
                                        <input name="feesattachmentpath" type="file" class="form-control-file" id="exampleFormControlFile1">
                                      </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Admission Letter (image jpg)</label>
                                        <input name="admissionletterpath" type="file" class="form-control-file" id="exampleFormControlFile1">
                                      </div>
                                </div>
                            </div>
                            <div class="form-row p-3">
                                
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Latest Results (image jpg)</label>
                                        <input name="latestresultspath" type="file" class="form-control-file" id="exampleFormControlFile1">
                                      </div>
                                </div>
                            </div>
                            <div class="form-row p-3">
                                <div class="col">
                            <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>  
            </div>
          </div>
          <!-- end county bursary-->
        </div>
        </div>
    </div>

        {{-- <h2 class="lead">
            {{ trans('auth.loggedIn') }}
        </h2>
        <p>
            You have
                <strong>
                    @role('admin')
                       Admin
                    @endrole
                    @role('user')
                       User
                    @endrole
                </strong>
            Access
        </p>

        <hr>
        <p>
            You have access to {{ $levelAmount }}:
            @level(5)
                <span class="badge badge-primary margin-half">5</span>
            @endlevel

            @level(4)
                <span class="badge badge-info margin-half">4</span>
            @endlevel

            @level(3)
                <span class="badge badge-success margin-half">3</span>
            @endlevel

            @level(2)
                <span class="badge badge-warning margin-half">2</span>
            @endlevel

            @level(1)
                <span class="badge badge-default margin-half">1</span>
            @endlevel
        </p>

        @role('admin')

            <hr>

            <p>
                You have permissions:
                @permission('view.users')
                    <span class="badge badge-primary margin-half margin-left-0">
                        {{ trans('permsandroles.permissionView') }}
                    </span>
                @endpermission

                @permission('create.users')
                    <span class="badge badge-info margin-half margin-left-0">
                        {{ trans('permsandroles.permissionCreate') }}
                    </span>
                @endpermission

                @permission('edit.users')
                    <span class="badge badge-warning margin-half margin-left-0">
                        {{ trans('permsandroles.permissionEdit') }}
                    </span>
                @endpermission

                @permission('delete.users')
                    <span class="badge badge-danger margin-half margin-left-0">
                        {{ trans('permsandroles.permissionDelete') }}
                    </span>
                @endpermission

            </p>

        @endrole --}}

    </div>
</div>
