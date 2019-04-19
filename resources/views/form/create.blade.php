@extends('layouts.master')

@section('title')
    {{ $title }}
@endsection

@section('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <link href='../../../css/pm.css' rel='stylesheet'>
@endsection

@section('content')

<div class="wrapper">
   <div class="content" style="color:white;margin:auto;padding:10px;">
      <!-- form -->
        <form id="form-new-project" name="form-new-project" class="form container" method="POST" action="/app/action/create" enctype="multipart/form-data" style="margin:auto;margin-top:0;top:0px;">
            <h3><u><b>New Project Form</b></u></h3><br>
            {{ csrf_field() }}
            <div class="form-row">
              <div class="form-group col-sm-12 col-md-12">
                <label for="varProjectName"><b>Project Name</b></label>
                <input type="text" class="form-control" id="varProjectName" name="varProjectName"  value="{{ old('varProjectName') }}">
                <span class="dwa15-help-text"><small>Required</small></span>
              </div>
          </div>
              <div class="form-row">
              <div class="form-group col-sm-12 col-md-6 col-lg-6">
                  <label for="varDepartment"><b>Department</b></label>
                  <select class="form-control" id="varDepartment" name="varDepartment">
                    <option>---Select---</option>
                    <option value="HQNRE">HQ Network Real-Estate</option>
                    <option value="HQNRC">HQ Network Regulatory and Compliance</option>
                    <option value="TRANS">Transformation</option>
                    <option value="HQCOMP">HQ Network Compliance</option>
                  </select>
                  <span class="dwa15-help-text"><small>Required</small></span>
              </div>
              <div class="form-group col-sm-12 col-md-6 col-lg-6">
                  <label for="varFunctionalArea"><b>Functional Area</b></label>
                  <select class="form-control" id="varFunctionalArea" name="varFunctionalArea">
                    <option>---Select---</option>
                    <option value="REO">Real-Estate: Outbound</option>
                    <option value="REI">Real-Estate: Inbound</option>
                    <option value="ASSUR">Regulatory: Assurance & Operations</option>
                    <option value="SPEC">Regulatory: Spectrum Management</option>
                    <option value="IMPL">Regulatory: Implementation</option>
                    <option value="NEPA">Regulatory: NEPA/Section 106</option>
                    <option value="ME">Compliance: Maintenance Engineering</option>
                    <option value="E911">Compliance: E911</option>
                    <option value="CALEA">Compliance: CALEA</option>
                    <option value="TRCOM">Transformation: Training & Communications</option>
                    <option value="TOOLS">Transformation: Tools</option>
                    <option value="RPT">Transformation: Reporting</option>
                    <option value="OTHR">Transformation: Other</option>
                  </select>
                  <span class="dwa15-help-text"><small>Required</small></span>
              </div>
          </div>
          <div class="form-row">
            <div class="form-group col-sm-12 col-md-4 col-lg-4">
              <label for="varProjectChampion"><b>Project Champion</b></label>
              <input type="text" class="form-control" id="varProjectChampion" name="varProjectChampion" value="{{ old('varProjectChampion') }}">
              <span class="dwa15-help-text"><small>Required</small></span>
            </div>
            <div class="form-group col-sm-12 col-md-4 col-lg-4">
              <label for="varProjectSponsor"><b>Project Sponsor</b></label>
              <input type="text" class="form-control" id="varProjectSponsor" name="varProjectSponsor"   value="{{ old('varProjectSponsor') }}">
              <span class="dwa15-help-text"><small>Required</small></span>
            </div>
            <div class="form-group col-sm-12 col-md-4 col-lg-4">
              <label for="varProjectManager"><b>Project Manager</b></label>
              <input type="text" class="form-control" id="varProjectManager" name="varProjectManager"   value="{{ old('varProjectManager') }}">
              <span class="dwa15-help-text"><small>Required</small></span>
            </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-12 col-md-6 col-lg-6">
            <label for="varProjectObjectives"><b>Project Objectives</b></label>
            <textarea class="form-control" rows="3" id="varProjectObjectives" name="varProjectObjectives" value="{{ old('varProjectObjectives') }}"></textarea>
            <span class="dwa15-help-text"><small>Required</small></span>
          </div>
          <div class="form-group col-sm-12 col-md-6 col-lg-6">
            <label for="varProjectDeliverables"><b>Project Deliverables</b></label>
            <textarea class="form-control" rows="3" id="varProjectDeliverables" name="varProjectDeliverables" value="{{ old('varProjectDeliverables') }}"></textarea>
            <span class="dwa15-help-text"><small>Required</small></span>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-12 col-md-4 col-lg-4">
            <label for="varProjectCosts"><b>Project Costs</b></label>
            <textarea class="form-control" rows="3" id="varProjectCosts" name="varProjectCosts" value="{{ old('varProjectCosts') }}"></textarea>
            <span class="dwa15-help-text"><small>Required</small></span>
          </div>
            <div class="form-group col-sm-12 col-md-4 col-lg-4">
          <label for="varProjectBenefits"><b>Project Benefits</b></label>
          <textarea class="form-control" rows="3" id="varProjectBenefits" name="varProjectBenefits" value="{{ old('varProjectBenefits') }}"></textarea>
          <span class="dwa15-help-text"><small>Required</small></span>
        </div>
        <div class="form-group col-sm-12 col-md-4 col-lg-4">
            <label for="varProjectAssumptions"><b>Project Assumptions</b></label>
            <textarea class="form-control" rows="3" id="varProjectAssumptions" name="varProjectAssumptions" value="{{ old('varProjectAssumptions') }}"></textarea>
            <span class="dwa15-help-text"><small>Required</small></span>
          </div>
        </div>


              <button class="btn btn-success" type="submit" value="Search" style="float:right;margin:auto;"> Submit</button>
              <br>
              <br>
              <hr>
        </form>

      <!-- end card -->
   </div>
</div>
@endsection
