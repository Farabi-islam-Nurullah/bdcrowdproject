@extends('admin.layouts.app')

@section('AdminDashbordContent')
<!-- Start app main Content -->
<div class="main-content ">
                <section class="section ">
                    <div class="row pt-4 ">
                        <div class="col-md-6">
                            <div class="form-group">

                                <select class="form-control select2">
                                    <option>project name</option>
                                    <option>project name</option>
                                    <option>project name</option>
                                    </select>
                            </div>
                        </div>

                        <div class="col-md-6 text-right">

                            <a data-toggle="modal" data-target="#addnewFaqmodel" href="#" class="btn btn-primary">Add New FAQ</a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped v_center" id="table-1">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">
                                                        ID
                                                    </th>
                                                    <th>Question</th>

                                                    <th>Answare</th>

                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        1
                                                    </td>

                                                    <td>
                                                        Question rem ipsum dolor sit amet consectetur adipisicing elit. Facere quae totam nostrum
                                                    </td>
                                                    <td>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quae totam nostrum optio repellat. Nostrum quam numquam placeat velit minus ea! Minus dolorum maxime consectetur, nihil rem laudantium corrupti vero.
                                                    </td>

                                                    <td>
                                                        <a data-toggle="modal" data-target="#editeFaqmodel" href="#" class="btn btn-icon btn-primary"><i class="fas fa-pen-nib"></i></a>
                                                        <a data-toggle="modal" data-target="#DeleteFaqmodel" href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


            <!-- ------------------------ add new faQ model --------------- -->
    <div class="modal fade" tabindex="-1" role="dialog" id="addnewFaqmodel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Do you want to Add new FAQ?</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <div class="form-group ">
                        <label>FAQ Question</label>
                        <input type="text" class="form-control">

                    </div>
                    <label>FAQ Answare</label>
                    <textarea class="summernote-simple"></textarea>

                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button data-dismiss="modal" type="button" class="btn btn-secondary">close</button>
                    <button type="button" class="btn btn-primary">Save Change</button>

                </div>
            </div>
        </div>
    </div>
    <!-- ------------------------ Eidt faQ model --------------- -->
    <div class="modal fade" tabindex="-1" role="dialog" id="editeFaqmodel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Do you want to Edit this FAQ?</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <div class="form-group ">
                        <label>FAQ Question</label>
                        <input type="text" class="form-control">

                    </div>
                    <label>FAQ Answare</label>
                    <textarea class="summernote-simple"></textarea>

                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button data-dismiss="modal" type="button" class="btn btn-secondary">close</button>
                    <button type="button" class="btn btn-primary">Save Change</button>

                </div>
            </div>
        </div>
    </div>

    <!-- ------------------------ Delete btn model --------------- -->
    <div class="modal fade" tabindex="-1" role="dialog" id="DeleteFaqmodel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Do you want to Delete this FAQ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <p> you will not get this FAQ after Delete. Ii will delete form your website</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
@endsection