<a href="/auth/register">Добавить</a>
<table>
    <tr>
        <th>id</th>
        <th>Почта</th>
    </tr>
    <? foreach($users as $row) { ?>
        <tr>
            <td><? echo $row["id"];?></td>
            <td><? echo $row["email"];?></td>
        </tr>
    <? } ?>
</table>

<?$paginator->view()?>