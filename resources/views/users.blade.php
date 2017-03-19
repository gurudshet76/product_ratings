@extends('mlayout') 
@section('content')

    <div class="container">
		
        <div class="modal fade" id="userEditModal" tabindex="-1" role="dialog" aria-labelledby="userEditModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="userEditModalLabel">Edit User Details</h4>
                    </div>
                    <div class="modal-body"> <!-- modal body start -->
                            {{ Form::open(array('url'=>'/editUser','class'=>'form-horizontal', 'method'=> 'POST')) }}
                                    
                            <!-- Device model listing --> 
                            <input type="hidden" name="us_id" id="us_id" value=""/>

                            <div class="control-group">
                                    <label for="user_name" class="control-label">User name:</label>
                                    <div class="controls">
                                            <input type="text" id="user_name" name="user_name" class="form-control" placeholder="User Name" disabled />
                                    </div>
                            </div>

                            <div class="control-group">
                                    <label for="user_email" class="control-label">Email:</label>
                                    <div class="controls">
                                          <input type="text" id="user_email" name="user_email" class="form-control" placeholder="Email" disabled/>
                                    </div>
                            </div>


                            <div class="control-group">
                                    <label for="mobile_no" class="control-label">Mobile No:</label>
                                    <div class="controls">
                                            <!--{{ Form::text('mobileno', null, array('class'=>'span3', 'placeholder'=>'Mobile no')) }}-->
                                            <input type="text" id="mobile_no" name="mobile_no" class="form-control" placeholder="Mobile no" disabled/>
                                    </div>
                            </div> <!-- /field -->
                            
                            <div class="control-group">
                                    <label for="password" class="control-label">Passsword: </label>
                                    <div class="controls">
                                            <!--{{ Form::text('password', null, array('class'=>'span3', 'placeholder'=>'Password')) }}-->
                                            <input type="text" id="password" name="password" class="form-control" placeholder="Password"/>
                                    </div>
                            </div> <!-- /field -->

                            <div class="control-group">
                                    <label for="user_desc" class="control-label">Description: </label>
                                    <div class="controls">
                                            <textarea id="user_desc" name="user_desc" class="form-control" placeholder="Description"> </textarea>
                                    </div>
                            </div><!--  /field -->

                            <div class="control-group">
                                    <label for="user_role" class="control-label">Roles: </label>
                                    <div class="controls">
                                            <select id="user_role" name="user_role" class="form-control">
                                                <option value="1">Manager</option>
                                                <option value="2">Staff</option>        
                                                <option value="3">Visitor</option>        
                                            </select> 
                                    </div>
                            </div> <!-- /field -->
                            
                            <div class="control-group">
                                    <label for="location" class="control-label">Location: </label>
                                    <div class="controls">
                                         <select id="location" name="location" class="form-control">
                                                <option value="US">USA</option>
                                                <option value="IN">INDIA</option>        
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

        
        
        <div class="modal fade" id="userAddModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="prodModalLabel">Add User</h4>
                    </div>
                    <div class="modal-body"> <!-- modal body start -->
                            {{ Form::open(array('url'=>'/addUser','class'=>'form-horizontal', 'method'=> 'POST')) }}
                                    
                            <!-- Device model listing --> 
                            
                            <div class="control-group">
                                    <label for="username" class="control-label">User name:</label>
                                    <div class="controls">
                                            <!--{{ Form::text('username', null, array('class'=>'span3', 'placeholder'=>'User Name')) }}-->
                                            <input type="text" id="username" name="username" class="form-control" placeholder="User Name"/>
                                    </div>
                            </div>

                            <div class="control-group">
                                    <label for="useremail" class="control-label">Email:</label>
                                    <div class="controls">
                                            <!--{{ Form::text('useremail', null, array('class'=>'span3', 'placeholder'=>'Email')) }}-->
                                            <input type="text" id="useremail" name="useremail" class="form-control" placeholder="Email"/>
                                    </div>
                            </div>


                            <div class="control-group">
                                    <label for="mobileno" class="control-label">Mobile No:</label>
                                    <div class="controls">
                                            <!--{{ Form::text('mobileno', null, array('class'=>'span3', 'placeholder'=>'Mobile no')) }}-->
                                            <input type="text" id="mobileno" name="mobileno" class="form-control" placeholder="Mobile no"/>
                                    </div>
                            </div> <!-- /field -->
                            
                            <div class="control-group">
                                    <label for="password" class="control-label">Passsword: </label>
                                    <div class="controls">
                                            <!--{{ Form::text('password', null, array('class'=>'span3', 'placeholder'=>'Password')) }}-->
                                            <input type="text" id="password" name="password" class="form-control" placeholder="Password"/>
                                    </div>
                            </div> <!-- /field -->

                            <div class="control-group">
                                    <label for="userdesc" class="control-label">Description: </label>
                                    <div class="controls">
                                            <textarea id="userdesc" name="userdesc" class="form-control" placeholder="Description"> </textarea>
                                    </div>
                            </div><!--  /field -->

                            <div class="control-group">
                                    <label for="userrole" class="control-label">Roles: </label>
                                    <div class="controls">
                                            <!--{{ Form::text('userrole', null, array('class'=>'span3', 'placeholder'=>'User roles')) }}-->
                                            <select id="userrole" name="userrole" class="form-control">
                                                <option value="1">Manager</option>
                                                <option value="2">Staff</option>        
                                                <option value="3">Visitor</option>        
                                            </select> 
                                    </div>
                            </div> <!-- /field -->
                            
                            <div class="control-group">
                                    <label for="location" class="control-label">Location: </label>
                                    <div class="controls">
                                         <select id="location" name="location" class="form-control">
                                                <option value="US">USA</option>
                                                <option value="IN">INDIA</option>        
                                        </select>  
                         <!--{{ Form::text('location', null, array('class'=>'span3', 'placeholder'=>'Location')) }}-->
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
            <form action="{{ URL::to('userdelete') }}" class="form-horizontal" method="post">
		     <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>User informations
                        <div class="pull-right">
                          
                                <button type="button" data-toggle="modal"  data-target="#userAddModal" id="btAddUser"
                                    data-roleid:""
                                     class="btn btn-default">
                                    <span class="glyphicon glyphicon-plus"></span>Add
                                </button>
                                <button id="delete_user" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-trash">
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
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Mobile No</th>
                            <th>Role Description</th>
                            <th>Location</th>
                            <th>Description</th>
                            <th>View</th>
                            <th>Create</th>
                            <th>Update</th>
                            <th>Delete</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usersInfo as $userInfo)
                        <tr class="success">
                            <td class="col-check"><input  name="checkedUsers[]" type="checkbox" id="{{$userInfo->us_id}}" value="{{$userInfo->us_id}}" ></td>
                            <td>{{$userInfo->user_name}}</td>
                            <td>{{$userInfo->user_email}}</td>
                            <td>{{$userInfo->mobile_no}}</td>
                            <td>{{$userInfo->role_desc}}</td>
                            <td>{{$userInfo->loc_name}}</td>
                            <td>{{$userInfo->user_desc}}</td>
                            <td>{{$userInfo->role_view}}</td>
                            <td>{{$userInfo->role_create}}</td>
                            <td>{{$userInfo->role_update}}</td>
                            <td>{{$userInfo->role_delete}}</td>
                            <td><button type="button" class="btn btn-primary btn-xs edit-page" data-toggle="modal" data-target="#userEditModal" id="btUserEditModal" 
                                        data-id="{{$userInfo->us_id}}"
                                        data-name="{{$userInfo->user_name}}" 
                                        data-email="{{$userInfo->user_email}}"
                                        data-mobile="{{$userInfo->mobile_no}}" 
                                        data-desc ="{{$userInfo->user_desc}}"
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
        var name = $(this).data('name');
        var email =  $(this).data('email');
        var mobile = $(this).data('mobile');
        var desc = $(this).data('desc');
        console.log(" ::::" + mobile);

        $(".modal-body #us_id").val(id);
        $(".modal-body #user_name").val(name);
        $(".modal-body #user_email").val(email);
        $(".modal-body #mobile_no").val(mobile);
        $(".modal-body #user_desc").val(desc);
    });

    
});
</script>
@stop