<div ng-controller="userController">
    <div class="card">
        <div class="card-body">
        <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="item in datas">
                <td>{{$index+1}}</td>
                <td>{{item.username}}</td>
                <td>{{item.password}}</td>
            </tr>
        </tbody>
    </table>
        </div>
    </div>
    
</div>