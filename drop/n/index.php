<?php
include 'DBController.php';
$db_handle = new DBController();
$countryResult = $db_handle->runQuery("SELECT DISTINCT name FROM tt2 ORDER BY name ASC");
$countryResult1 = $db_handle->runQuery("SELECT DISTINCT email FROM tt2 ORDER BY email ASC");
?>
<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Multiselect Dropdown Filter</title>
</head>
<body>
    <h2>Multiselect Dropdown Filter</h2>
    <form method="POST" name="search" action="index.php">
        <div id="demo-grid">
            <div class="search-box">
                <select id="Place" name="name[]" multiple="multiple">
                    <option value="0" selected="selected">Select Country</option>
                        <?php
                        if (! empty($countryResult)) {
                            foreach ($countryResult as $key => $value) {
                                echo '<option value="' . $countryResult[$key]['name'] . '">' . $countryResult[$key]['name'] . '</option>';
                            }
                        }
                        ?>
                </select><br> <br>
                 <select id="Place" name="email[]" multiple="multiple">
                    <option value="0" selected="selected">Select mail</option>
                        <?php
                        if (! empty($countryResult1)) {
                            foreach ($countryResult1 as $key => $value) {
                                echo '<option value="' . $countryResult1[$key]['email'] . '">' . $countryResult1[$key]['email'] . '</option>';
                            }
                        }
                        ?>
                </select><br> <br>
                <button id="Filter">Search</button>
            </div>
            
                <?php
                if (! empty($_POST['name'])) {
                    ?>
                    <table cellpadding="10" cellspacing="1">

                <thead>
                    <tr>
                        <th><strong>Name</strong></th>
                        <th><strong>Gender</strong></th>
                        <th><strong>Country</strong></th>
                        <th><strong>Country</strong></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * from tt2";
                    $i = 0;
                    $selectedOptionCount = count($_POST['name']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['name'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }
                        
                        $i ++;
                    }
                    $query = $query . " WHERE name in (" . $selectedOption . ")";
                    
                    $result = $db_handle->runQuery($query);
                }
                if (! empty($result)) {
                    foreach ($result as $key => $value) {
                        ?>
                <tr>
                        <td><div class="col" id="user_data_1"><?php echo $result[$key]['name']; ?></div></td>
                        <td><div class="col" id="user_data_2"><?php echo $result[$key]['telephone']; ?> </div></td>
                        <td><div class="col" id="user_data_3"><?php echo $result[$key]['email']; ?> </div></td>
                              <td><div class="col" id="user_data_3"><?php echo $result[$key]['location']; ?> </div></td>

                    </tr>
                <?php
                    }
                    ?>
                    
                </tbody>
            </table>
            <?php
                }
                ?>  
        </div>
    </form>
</body>
</html>