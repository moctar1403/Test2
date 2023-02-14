@extends('layouts.admin')


@section('content')

		<div class="row">
            <div class="col-md-12 ">
              <div class="card">
              	<div class="card-header">
              		<h3>Category
                    <a class="btn btn-primary float-end btn-sm" href="{{ url('admin/category/create') }}">Add Category</a>
                  </h3>
              	</div>
              	<div class="card-body">
              		<form action="" enctype="multipart/form-data">
                    <div class="row">

                    <div class=" col-md-6 mb-3">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control"/>
                    </div>  
                    <div class=" col-md-6 mb-3">
                      <label>Slug</label>
                      <input type="text" name="slug" class="form-control"/>
                    </div>
                    <div class=" col-md-6 mb-3">
                      <label>Description</label>
                      <input type="text" name="description" class="form-control"/>
                    </div>
                    <div class=" col-md-6 mb-3">
                      <label>Image</label>
                      <input type="file" name="image" class="form-control"/>
                    </div>
                    <div class=" col-md-6 mb-3">
                      <label>Status</label> <br>
                      <input type="checkbox" name="status" />
                    </div>
                    <div class=" col-md-6 mb-3">
                      <label>Meta Title</label>
                      <input type="text" name="meta_title" class="form-control"/>
                    </div>
                    <div class=" col-md-6 mb-3">
                      <label>Meta Keyword</label>
                      <input type="text" name="meta_keyword" class="form-control"/>
                    </div>
                    <div class=" col-md-6 mb-3">
                      <label>Meta Description</label>
                      <input type="text" name="meta_description" class="form-control"/>
                    </div>




                    </div>
                    
                  </form>
              	</div>
              </div>
             </div>
         </div>

 @endsection 

