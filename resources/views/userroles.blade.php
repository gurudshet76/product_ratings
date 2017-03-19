@extends('mlayout') 
@section('content')

    <div class="container">
		
        <div class="modal fade" id="userEditRoleModal" tabindex="-1" role="dialog" aria-labelledby="userEditRoleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="userEditRoleModalLabel">Edit Role and Permissions</h4>
                    </div>
                    <div class="modal-body"> <!-- modal body start -->
                            {{ Form::open(array('url'=>'/edituserrole','class'=>'form-horizontal', 'method'=> 'POST')) }}
                                    
                            <!-- Device model listing --> 
                            <input type="hidden" name="roleid" id="roleid" value=""/>

                            <div class="control-group">
                                    <label for="rolelevel" class="control-label">Role Level:</label>
                                    <div class="controls">
                                            <!--{{ Form::text('username', null, array('class'=>'span3', 'placeholder'=>'User Name')) }}-->
                                            <input type="text" id="rolelevel" name="rolelevel" value="" class="form-control"
                                                         placeholder="Role level (1-Manager,2-Staff, 3-Visitor):" disabled/>
                                    </div>
                            </div>

                            <div class="control-group">
                                    <label for="roledesc" class="control-label">Role Description:</label>
                                    <div class="controls">
                                            <!--{{ Form::text('useremail', null, array('class'=>'span3', 'placeholder'=>'Email')) }}-->
                                            <input type="text" id="roledesc" name="roledesc" value="" class="form-control" 
                                                        placeholder="Role Description" disabled/>
                                    </div>
                            </div>


                            <div class="control-group">
                                    <label for="roleview" class="control-label">Role perm (View):</label>
                  
                                    <div class="controls">
                                         <select id="roleview" name="roleview" class="form-control">
                                                <option value="0">Disable</option>
                                                <option value="1">Enable</option>        
                                        </select>  
                                    </div>
                            </div> <!-- /field -->
                            
                            <div class="control-group">
                                    <label for="rolecreate" class="control-label">Role perm (Create): </label>
                                    <div class="controls">
                                         <select id="rolecreate" name="rolecreate" class="form-control">
                                                <option value="0">Disable</option>
                                                <option value="1">Enable</option>        
                                        </select>  
                                    </div>
                            </div> <!-- /field -->
                            
                             <div class="control-group">
                                    <label for="roleupdate" class="control-label">Role perm (Update): </label>
                                    <div class="controls">
                                         <select id="roleupdate" name="roleupdate" class="form-control">
                                                <option value="0">Disable</option>
                                                <option value="1">Enable</option>        
                                        </select>  
                                    </div>
                            </div> <!-- /field -->

                             <div class="control-group">
                                    <label for="roledelete" class="control-label">Role perm (Delete): </label>
                                   <div class="controls">
                                         <select id="roledelete" name="roledelete" class="form-control">
                                                <option value="0">Disable</option>
                                                <option value="1">Enable</option>        
                                        </select>  
                                    </div>
                            </div> <!-- /field -->
                                                             
                    </div> <!-- Modal body end -->
                    <div class="modal-footer">
                            
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <span class="pull-right">
                                {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
                                <!--<button type="button" class="btn btn-primary"> Save</button>-->
                        </span>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>   

        
        
        <div class="modal fade" id="userRoleAddModal" tabindex="-1" role="dialog" aria-labelledby="userRoleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="userRoleModalLabel">Add user Role and Permissions </h4>
                    </div>
                    <div class="modal-body"> <!-- modal body start -->
                            {{ Form::open(array('url'=>'/adduserrole','class'=>'form-horizontal', 'method'=> 'POST')) }}
                                    
                            <!-- Device model listing --> 
                            
                            <div class="control-group">
                                    <label for="role_level" class="control-label">Role Level:</label>
                                    <div class="controls">
                                            <input type="text" id="role_level" name="role_level" class="form-control" placeholder="Role level (1-Manager,2-Staff, 3-Visitor):"/>
                                    </div>
                            </div>

                            <div class="control-group">
                                    <label for="role_desc" class="control-label">Role Description:</label>
                                    <div class="controls">
                                            <input type="text" id="role_desc" name="role_desc" class="form-control" placeholder="Role Description"/>
                                    </div>
                            </div>


                            <div class="control-group">
                                    <label for="role_view" class="control-label">Role perm (View):</label>
                  
                                    <div class="controls">
                                         <select id="role_view" name="role_view" class="form-control">
                                                <option value="0">Disable</option>
                                                <option value="1">Enable</option>        
                                        </select>  
                                    </div>
                            </div> <!-- /field -->
                            
                            <div class="control-group">
                                    <label for="role_create" class="control-label">Role perm (Create): </label>
                                    <div class="controls">
                                         <select id="role_create" name="role_create" class="form-control">
                                                <option value="0">Disable</option>
                                                <option value="1">Enable</option>        
                                        </select>  
                                    </div>
                            </div> <!-- /field -->
                            
                             <div class="control-group">
                                    <label for="role_update" class="control-label">Role perm (Update): </label>
                                    <div class="controls">
                                         <select id="role_update" name="role_update" class="form-control">
                                                <option value="0">Disable</option>
                                                <option value="1">Enable</option>        
                                        </select>  
                                    </div>
                            </div> <!-- /field -->

                             <div class="control-group">
                                    <label for="role_delete" class="control-label">Passsword: </label>
                                   <div class="controls">
                                         <select id="role_delete" name="role_delete" class="form-control">
                                                <option value="0">Disable</option>
                                                <option value="1">Enable</option>        
                                        </select>  
                                    </div>
                            </div> <!-- /field -->
                                          
                    </div> <!-- Modal body end -->
                    <div class="modal-footer">
                            
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <span class="pull-right">
                                {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
                                <!--<button type="button" class="btn btn-primary"> Save</button>-->
                        </span>
                    </div>
                    {{ Form::close() }}
                </div>
             </div>
        </div>   
        
        
        
        <!-- List view of users in system -->
        <div class="row">
            <form action="{{ URL::to('deleteuserrole') }}" class="form-horizontal" method="post">
		     <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Role and Permission Management
                        <div class="pull-right">
                          
                                <button type="button" data-toggle="modal"  data-target="#userRoleAddModal" id="btAddUserRoles"
                                    class="btn btn-default">
                                    <span class="glyphicon glyphicon-plus"></span>Add
                                </button>
                                <button id="delete_userroles" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-trash">
                                    </span> Delete
                                </button>
                            <!--</form>-->
                        </div>
                    </h3>
                </div>
                
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="col-check"></th>
                            <th>Id</th>
                            <th>Level</th>
                            <th>Role Description</th>
                            <th>Perm View</th>
                            <th>Perm Create</th>
                            <th>Perm Update</th>
                            <th>Perm Delete</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($userroles as $userrole)
                        <tr class="success">
                            <td class="col-check"><input  name="checkedUsersRoles[]" type="checkbox" id="{{$userrole->role_id}}" value="{{$userrole->role_id}}" ></td>
                            <td>{{$userrole->role_id}}</td>
                            <td>{{$userrole->role_level}}</td>
                            <td>{{$userrole->role_desc}}</td>
                            <td>{{$userrole->role_view}}</td>
                            <td>{{$userrole->role_create}}</td>
                            <td>{{$userrole->role_update}}</td>
                            <td>{{$userrole->role_delete}}</td>
                            <td><button type="button" class="btn btn-primary btn-xs edit-page" data-toggle="modal" data-target="#userEditRoleModal" id="btUserRoleEditModal" 
                                        data-id ="{{$userrole->role_id}}"
                                        data-level ="{{$userrole->role_level}}" 
                                        data-desc ="{{$userrole->role_desc}}"
                                        data-view ="{{$userrole->role_view}}" 
                                        data-create ="{{$userrole->role_create}}"
                                        data-update ="{{$userrole->role_update}}"
                                        data-delete ="{{$userrole->role_delete}}"
                                        > Edit </button></td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
           
		    </div> <!-- panel primary -->
                 </form>
	    </div> <!-- row -->
	</div> 

<script>
$(document).ready(function(){
    $('button').click(function(){
        console.log(" ::::1");
        var id = $(this).data('id');
        var level = $(this).data('level');
        var desc =  $(this).data('desc');
        var permview = $(this).data('view');
        var permcreate = $(this).data('create');
        var permupdate = $(this).data('update');
        var permdelete = $(this).data('delete');
        console.log(" ::::" + level);

        $(".modal-body #roleid").val(id);
        $(".modal-body #rolelevel").val(level);
        $(".modal-body #roledesc").val(desc);
        $(".modal-body #roleview").val(permview);
        $(".modal-body #rolecreate").val(permcreate);
        $(".modal-body #roleupdate").val(permupdate);
        $(".modal-body #roledelete").val(permdelete);
        
    });

    
});
</script>
@stop