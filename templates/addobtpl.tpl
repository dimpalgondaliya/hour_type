{include file="$template/includes/tablelist.tpl" tableName="tblclients"}

<div class="table-container clearfix">
    <table id="tabletblclients" class="table table-list">
        <thead>
            <tr>
                <th>id</th>
            </tr>
        </thead>
        <tbody>
             {foreach $admindata as $data}
                  <tr>
                     <td><strong>{$data->id}</strong></td>
                  </tr>
            {/foreach}
        </tbody>
    </table>
</div>
