

    <div >
        <div class="tableL">
            <table class="Table">
            <thead>
                    <th>Books Read</th>
                </thead
                <?php       
                    foreach ($booksR as $r) {
                        echo "<tr>";
                        echo "<td>" . $r['book_name'] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
        
        <div class="tableR">
            <table class="Table">
            <thead>
                    <th>Wishlist</th> 
                </thead
                <?php
                    foreach ($booksW as $w) {
                        echo "<tr>";
                        echo "<td>" . $w['book_name'] . "</td>"; 
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </div>
