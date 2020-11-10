<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create New Project</title>
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
                        </form>
                    </li>
                    <li><a href="manager-all-employees.php">See All Employees</a></li>
                    <li><a href="manager-edit-profile.php">Edit Profile</a></li>
                    <li><a href="manager-edit-project.php">Edit Project</a></li>
                    <li><a href="manager-create-new-project.php">Create New Project</a></li>
                    <li><a href="manager-create-new-user.php">Create New User</a></li>
                    <li><a href="manager-landing.php">Home</a></li>
                </ul>
            </nav>

			<div class="manager-create-new-project-card-container">
                <header>
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <h2>Create New Project</h2>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </header>
                
                <article>
                    <!-- add form tag here -->
                    <div>
                        <table id="createUserTable">
                            <tbody>
                                <tr>
                                    <td>Project Title: </td><td> <input type="text" name="projectTitle" class="text-input"/></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div>
                        <table>
                            <tr>
                                <td>Description: </td><td> <textarea name="projectDescription" id="projectDescription" cols="30" rows="10"></textarea></td>
                            </tr>
                        </table>
                    </div>

                    <div>
                        <table>
                            <tr>
                                <td>Start Date: </td><td> <input type="date" name="startDate"/></td>
                                <td>End Date: </td><td> <input type="date" name="endDate"/></td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="skills-container" style="margin-top: 30px";>
                        <table>
                            <thead>                        
                                <p class="project-members-heading" style="margin-bottom: 10px";>&nbsp;&nbsp;&nbsp; Project Members:</p>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="skill3" class="text-input"/></td>
                                    <td><input type="text" name="skill4" class="text-input"/></td>
                                </tr>

                                <tr>
                                    <td><input type="text" name="skill3" class="text-input"/></td>
                                    <td><input type="text" name="skill4" class="text-input"/></td>
                                </tr>
                            </tbody> 
                        </table>
                    </div>
                    
                    <div class="submit-button-container">
                        <p>
                            <input type="button" value="Submit" class="submit-button" style="float: right;"/> 
                        </p>
                    </div>
                    <!-- form tag goes here -->
            </article>
				
			</div>
		</div>
	</div>

</body>
</html>