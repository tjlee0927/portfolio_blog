$(document).ready(function() {
	$('#searchUser').on('keyup', function(e){
		let username = e.target.value;

		//Make Request to Github
		$.ajax({
			url: 'https://api.github.com/users/' + username,
			data: {
				client_id: '3add3b4f5cab62a9efc3',
				client_secret: 'b31bf5f3af5a5d4b8895b58c8b61e868a95677f7' 
			}
		}).done(function(user){
			$.ajax({
				url:'https://api.github.com/users/' + username + '/repos' , 
				data: {
				client_id: '3add3b4f5cab62a9efc3',
				client_secret: 'b31bf5f3af5a5d4b8895b58c8b61e868a95677f7', 
				sort: 'created: asc',
				per_page: 5
			}

                 }).done(function(repos){
				$.each(repos, function(index, repo){
					$('#repos').append(`
						<div class="well">
						  <div class="row">
						    <div class="col-md-7">
						    	<strong>${repo.name}</strong>: ${repo.description}
						    </div>

						    <div class="col-md-3">
						    <span class="badge badge-warning">Forks: ${repo.forks_count}</span>
				<span class="badge badge-info">Watchers: ${repo.watchers}</span>
				<span class="badge badge-success">Stars: ${repo.stargazers_count}</span>
						    </div>
						    <div class="col-md-2">
						      <a href="${repo.html_url}" target="_blank" class="btn btn-default">Repo Page</a>
						     </div>
						   </div>
						  </div>
						`);
				})
			});
                    $('#profile').html(`
			<div class="panel panel-default">
  				<div class="panel-heading">
    			  <h3 class="panel-title">${user.name}</h3>
  			</div>
  			<div class="panel-body">
    			<div class="row">
    				<div class="col-md-3">
    				  <img class="thumbnail avatar" src="${user.avatar_url}">
    				  <a target="_blank" class="btn btn-primary btn-block" href="${user.html_url}">View Profile</a>
  			</div>
  			<div class="col-md-9">
  				<span class="badge badge-warning">Public Repos: ${user.public_repos}</span>
				<span class="badge badge-primary">Public Gists: ${user.public_gists}</span>
				<span class="badge badge-success">Followers: ${user.followers}</span>
				<span class="badge badge-info">Users Following: ${user.following}</span>
				<br><br>

				<ul class="list-group">
					<li class="list-group-item">Company: ${user.company} </li>
					<li class="list-group-item">Website/blog: ${user.blog} </li>
					<li class="list-group-item">Location: ${user.location} </li>
					<li class="list-group-item">Member Since: ${user.created_at} </li>
				</ul>
		  </div>
		  </div>
		  </div>
		  </div>
		    <h3 class="page-header">Latest Repos</h3>
		    <div id="repos"</div>
				`)
		})


	});
});
