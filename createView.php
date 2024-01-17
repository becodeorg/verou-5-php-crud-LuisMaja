<form action="?action=create" method="post">

    <p>Name : <input type="text" name="bookName"></p>

    <label for="bookType">Type :</label>
    <select name="bookType" id="bookType">
        <option value="Manga">Manga</option>
        <option value="Manhwa">Manhwa</option>
        <option value="Manhua">Manhua</option>
        <option value="Webtoon">Webtoon</option>
        <option value="LightNovel">Ligth Novel</option>
    </select>
    <button type="submit" name="submit">Create</button>
</form>