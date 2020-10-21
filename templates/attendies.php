<div class='showbg'></div>
<div class='blurback'>
    <div class='showhold'>
        <h2>Attendies List</h2>
        <?php
            $tmarkup;
            $i = 0;
            if($regList != null) {
                $tmarkup = "<table class='mt-3'><thead id='new'><tr><td>Sr.</td><td>Name</td><td>Email</td><td>Seats</td><td>Update</td><td>Delete</td></tr></thead><tbody id='table'>";
                for ($i; $i < count($regList); $i++) {
                    $Lname = $regList[$i]['name'];
                    $Lemail = $regList[$i]['email'];
                    $Lseats = $regList[$i]['seats'];
                    $Lid = $regList[$i]['id'];
                    $tmarkup .= "<tr><td>$i</td><td>$Lname</td><td>$Lemail</td><td>$Lseats</td><td><a class='btn btn-outline-light btn-sm' href='index.php?req=update&id=$Lid'>Update</a></td><td><a class='btn btn-outline-light btn-sm' href='index.php?req=delreg&id=$Lid'>Delete</a></td></tr>";
                }
                $tmarkup .= "</tbody></table><div id='block'></div>";
            } else {
                $tmarkup = "<div id='block'><p>No Entries Available</p></div>";
            }
            echo $tmarkup;
        ?>
    </div>
</div>