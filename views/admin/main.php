<table>
    <tr>
        <th>ФИО</th>
        <th>Почта</th>
        <th>Отзыв</th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach($reviews as $row) { ?>
        <tr>
            <td><? echo "{$row["name"]} {$row["lastname"]} {$row["patronymic"]}";?></td>
            <td><? echo $row["email"];?></td>
            <td><? echo $row["review"];?></td>
            <td><a href=<? echo "/admin/show?id={$row["id"]}";?>>🔎</a></td>
            <td>
                <form action="/admin/delete" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<? echo $row['id']; ?>"/>
                    <input type="submit" value="❌" onclick="return confirm('Вы уверены, что хотите удалить пользователя?');">
                </form>
            </td>
        </tr>
    <? } ?>
</table>

