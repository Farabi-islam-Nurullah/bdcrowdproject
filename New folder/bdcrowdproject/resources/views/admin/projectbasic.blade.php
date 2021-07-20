@extends('admin.layouts.app')

@section('AdminDashbordContent')
<!-- Start app main Content -->
<div class="main-content ">
                <section class="section ">
                    <div class="d-flex justify-content-between align-items-center py-3 px-4">
                        <p>write a New project </p>
                        <div>
                            <a href="{{route('admin.projects')}}" class="btn btn-primary">Go Project List</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('project.store')}}" method="POST" enctype="multipart/form-data" >
                                    @csrf

                                        <div class="row">
                                            <div class="col-md-4">  
                                                <div class="form-group ">
                                                    <label>project Name</label>
                                                    <input type="text" class="form-control" name="projectName">
                                                </div>
                                                <div class="form-group ">
                                                    <label>Unit quantity</label>
                                                    <input type="text" class="form-control" name="unitQuantity">
                                                </div>


                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group ">
                                                    <label>project Address</label>
                                                    <input type="text" class="form-control"
                                                    name="projectAddress" >

                                                </div>
                                                <div class="form-group ">
                                                    <label>Maximum Goal</label>
                                                    <input type="text" class="form-control"
                                                    name="maxGoal" >
                                                </div>


                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group ">
                                                    <label>Unit Price</label>
                                                    <input type="text" class="form-control"
                                                    name="unitPrice">
                                                </div>
                                            

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Project Start Date</label>
                                                    <input type="text" class="form-control datepicker"
                                                    name="startTime">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Project Start End</label>
                                                    <input type="text" class="form-control datepicker"
                                                    name="endTime">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group ">

                                                    <label>Video Link</label>
                                                    <input type="text" class="form-control"
                                                    name="videoLink">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group ">
                                                    <label for="myfile">Image (Main Thumbnail)</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile"
                                                        name="imageOne">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group ">
                                                    <label for="myfile">Image two </label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile"
                                                        name="imageTwo" >
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group ">
                                                    <label for="myfile">Image Three</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile" name="imageThree">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group ">
                                                    <label for="myfile">Image Four</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile" name="imageFour">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="buttons pt-4">
                                                    <button type="submit"  class="btn btn-icon icon-left btn-primary"><i class="fas fa-upload"></i> Upload project</button>


                                                    <a href="#" class="btn btn-icon icon-left btn-secondary"><i class="fas fa-times"></i> Cancel project</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </section>
                </div>
            </div>
@endsection