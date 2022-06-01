
<div class="container-fluid">
    <div class="btn-group" role="group"><a class="btn btn-primary" role="button" href="/add_crew/{{vid}}" style="background: #07689f; border-width: 4px;border-color: #e0e0e0;">Add Crew</a></div>
    <hr>
    <table id="CrewsTable" class="display">
        <thead>
            <tr>
                <th></th>
                <th>Picture</th>
                <th>Name</th>
                <th>Position</th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>
            
            
            <tr>
                <td></td>
                
                <td><img src="https://breakingtvfilestore.b-cdn.net/noimage.jpg" width="50" height="50" /></td>
                
                <td><img src="{{crew.to_dict()['picture']}}" width="50" height="50" /></td>
               
                <td><b></b></td>
                <td></td>
                <td><button class="btn btn-light card" type="button" onclick="Sijax.request('delete_crew', ['{{vid}}', '{{crew.id}}'], { data: { csrf_token: '{{ csrf_token() }}' } });"><i style ="color: red" class="fas fa-trash"></i></button></td>
                
            </tr>
           
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function () {
        $('#CrewsTable').DataTable();
    });
</script>

