@extends('main.main')
@section('header')
@include('main.header')
@endsection
@section('content')

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"> File Upload with Sorting</a>
      </div>
    </div>
  </nav>
  <div class="container">
    <button class="btn btn-primary" ng-click="vm.addDoc()">Add Doc</button>
    <div class="panel-group" data-as-sortable="vm.documentDragListeners" ng-model="vm.documents">
      <div class="panel panel-default xlist" ng-repeat="doc in vm.documents" data-as-sortable-item>
        <div class="panel-heading">
          <h4 class="panel-title">
                 <i class="fa fa-grip-large fa-rotate-90" data-as-sortable-item-handle></i>
                <a data-toggle="collapse" data-target="#collapse{{$index}}">{{doc.type}}<i class="chevron fa fa-fw" ></i></a> <span class="badge">{{doc.files.length}}</span>
                <a class="close-ribbon pull-right" ng-click="vm.removeDoc($index)"><i class="fa fa-times"></i></a>
            </h4>

        </div>
        <div id="collapse{{$index}}" class="panel-collapse collapse in">
          <div class="panel-body">
            <button class="btn btn-primary" ngf-select="vm.addFiles($files,doc.files)" accept="*/*" multiple ng-model="vm.files" ngf-max-height="1000" ngf-max-size="5MB">
                    Select Files</button>

            <br>
            <br>
            <div ngf-drop="vm.addFiles($files,doc.files)" class="drop-box" ngf-drag-over-class="'dragover'" ngf-multiple="true" ngf-pattern="'image/*,application/pdf'">
              <div class="dragOverlay">
                <div class="dragInner">Drop files here.</div>
              </div>
              <div ngf-no-file-drop>File Drag/Drop is not supported for this browser</div>
              <ul class="list-group" data-as-sortable="vm.fileDragListeners" ng-model="doc.files">
                <li class="list-group-item list-group-item-info">
                  <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">Sort</div>
                    <div class="col-lg-4 col-md-4 col-sm-7 col-xs-7">Name</div>
                    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">Size (MB)</div>
                    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">Type</div>
                    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">Modified on</div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2"></div>
                  </div>
                </li>
                <li class="list-group-item" ng-show="doc.files.length === 0">
                  Drop Images or PDFs files here.
                </li>
                <li ng-repeat="f in doc.files" class="list-group-item xlist" data-as-sortable-item>
                  <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">
                      <div class="row">
                        <div class="col-xs-4" data-as-sortable-item-handle style="padding-top:5px;">
                          <i class="fa fa-grip"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-11 col-md-11 col-sm-7 col-xs-7">
                      <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-11 col-xs-10 wraptext">{{f.name}}
                        </div>
                        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">{{(f.size/1024/1024).toPrecision(2)}}</div>
                        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">{{f.type}}</div>
                        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">{{f.lastModified | date: short}}</div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                          <button type="button" class="btn btn-xs btn-danger" ng-click="vm.removeFile(doc.files,$index)">
                                                <span><i class="fa fa-trash"></i></span>
                                            </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="btn btn-primary">Upload</button>
  </div>

@endsection
@section('footer')
@include('main.footer')
@endsection