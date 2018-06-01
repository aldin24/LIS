<section>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">List of
                            <?= $toggle ?> Books</h3>
                    </div>
                </div>
            </div>
            <div>
                <div class="col-md-6">
               <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Book</th>
            <th scope="col">Authors</th>
            <th scope="col">Publishers</th>
            <th scope="col">Shelf row</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?= $book->title." - Ed. ".$book->edition." [".$book->copyid."]" ?>
            </td>
            <td>
                <?= $authors[$book->id] ?>
            </td>
            <td>
                <?= $book->pub ?>
            </td>
            <td>
                <?= $book->shelf."/".$book->row ?>
            </td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>
                    <div style="height:50px;"> &nbsp; </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $('#tableid').DataTable();
                    });

                </script>
            </div>
        </div>
    </div>
</section>

