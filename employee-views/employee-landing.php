<!DOCTYPE html>
<html lang="en">
<head>
	<title>Employee Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../assets/helper.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="domain-container">

            <nav>
                <ul>
                    <li>
                        <form align="right" name="form1" method="post" action="../logout.php">
                            <input class="logout-button" name="submit2" type="submit" id="submit2" value="Logout" >
                            
                            </label>
                        </form>
                    </li>
                    <li><a href="employee-all-employees.php">See All Employees</a></li>
                    <li><a href="employee-edit-profile.php">Edit Profile</a></li>
                    <li><a href="employee-landing.php">Home</a></li>
                </ul>

                
            </nav>

			<div class="card-container">

                <header>
                    <div class="search-bar-container">
                        <form class="search-bar" action="employee-search-results.php">
                            <input type="text" placeholder="Search.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="../assets/images/emptypic.png" alt="PlaceHolder Pic" width="100px" height="100px">
                                </td>
                                <td>
                                    <h2>Employee Name</h2>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </header>
                
                <article>
    
                    <table id="example" class="dataTable" >
                        <thead>
                            <tr>
                                <th>Project Title</th> 
                                <th>Description</th> 
                                <th>Start Date</th>
                                <th>End Date</th> 
                                <th>Project Members</th>
                            </tr>
                        </thead>
                            <tr>
                                <td>Company Website</td>
                                <td>Create company website.</td>
                                <td>07-02-2020</td>
                                <td>07-05-2020</td>
                                <td>
                                    <ul>
                                        <li>Jimin Park</li>
                                        <li>Namjoon Kim</li>
                                        <li>Taehyung Kim</li>
                                      </ul>  
                                </td>
                            </tr>
                            <tr>
                                <td>iOS - Planning Feature</td>
                                <td>Updating the iOS app to match the planning feature in Android</td>
                                <td>06-27-2020</td>
                                <td>06-30-2020</td>
                            </tr>
                            <tr>
                                <td>Android - Task Handling Feature</td>
                                <td>Implement a new task handling feature for company software.</td>
                                <td>05-10-2020</td>
                                <td>05-15-2020</td>
                            </tr>
                    </table>
            
            </article>
				
			</div>
		</div>
	</div>

</body>
</html>