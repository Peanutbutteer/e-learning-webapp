@extends('layouts.appAdmin')

@section('content')

<div class="content-wrapper" ng-app="AdminApp">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      User Management
      <small>advanced management</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">User</a></li>
      <li class="active">All</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content" ng-controller="CourseListController">
    <div class="row"  ng-repeat="course in course">
      <div class="col-xs-12"  >
        <div class="box box-default collapsed-box">
          <div class="box-header with-border">
            <h3 class="box-title"><%course.name%></h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
          
            <button ng-click="publish(course)" class="btn btn-block btn-lg" ng-class="{'danger':course.statusText=='unPublish','btn-success':course.statusText=='Publish'}"><%course.statusText%></button>
            <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"  ng-click="openEditPage(course.id)">
  <i class="material-icons mdl-color-text--black">description</i>
</button>
<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
  <a href="{{ url('/admin/course/section')}}/<%course.id%>"><i class="material-icons f18">list</i></a>
</button>
<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" ng-click="deleteCourse(course.id)">
  <i class="material-icons f18 mdl-color-text--red-400">clear</i>
</button>
              <%course.about%>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>

@endsection

@section('script')
@endsection