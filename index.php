<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title></title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">

<script src="//code.jquery.com/jquery-3.3.1.js"></script>
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script src="index.js"></script>
<style>
body {
    font-family: "微軟正黑體";
}

.error {
    color: #D82424;
    font-weight: normal;
    display: inline;
    padding: 1px;
}
</style>
</head>

<body>


	

    <div class="row">
    	<div class="col-md-2">
    		<ul class="list-group">
    			<li></li><li></li><li></li>
    			<li class="list-group-item"><a href="index.php" style="text-decoration:none;color:black;font-weight: bold">所有鎖</a></li>
    			<li class="list-group-item"><a href="#" style="text-decoration:none;color:black;font-weight: bold">所有使用者</a></li>
    			
    			
    		
    		</ul>
    	</div>
        <div class="col-md-8 text-center">
            <form class="form-horizontal form-inline" name="form1" id="form1" method="post">
                <input type="hidden" name="oper" id="oper" value="insert">
                <input type="hidden" name="stud_no_old" id="stud_no_old" value="">
               <!--  <table id="edit" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">name</th>
                            <th class="text-center">account</th>
                            <th class="text-center">password</th>
                            <th class="text-center">tmp_password</th>
                            <th class="text-center">start_time</th>
                            <th class="text-center">end_time</th>
                            
                        </tr>
                        <tr>
                            <td class="text-center">
                                <input type="text" id="stud_no" name="stud_no">
                            </td>
                            <td class="text-center">
                                <input type="text" id="stud_name" name="stud_name">
                            </td>
                            <td class="text-center">
                                <input type="text" id="stud_sex" name="stud_sex">
                            </td>
                            <td class="text-center">
                                <input type="text" id="stud_addr" name="stud_addr">
                            </td>
                            <td>
                                <input type="text" id="start_time" name="start_time">
                            </td>
                            <td>
                                <input type="text" id="end_time" name="end_time">
                            </td>
                            <td>
                            	<button type="submit" class="btn btn-primary btn-xs" id="btn-save"><i class="glyphicon glyphicon-save"></i>搜尋</button>
                        	</td>
                        </tr>
                    </thead>
                </table> -->
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">name</th>
                            <th class="text-center">account</th>
                            <th class="text-center">password</th>
                            <th class="text-center">tmp_password</th>
                            <th class="text-center">start_time</th>
                            <th class="text-center">end_time</th>
                        </tr>
                    </thead>
                </table>
        </div>

        <div class="col-md-2"></div>
    </div>

</body>

</html>