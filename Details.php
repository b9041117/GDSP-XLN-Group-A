<?php

include("connection.php"); 
include("CustomerKey.php");
   
    $Customer_Key = intval($Customer_Key);
    echo $Customer_Key;

    if(!empty($Customer_Key) && is_numeric($Customer_Key))
    {
        $BAquery = "SELECT `business_assurance` FROM `users` WHERE Customer_Key = $Customer_Key limit 1";
        $BAresult = mysqli_query($con, $BAquery);
    
        if($BAresult)
        {
            if($BAresult && mysqli_num_rows($BAresult) > 0)
            {
                $BAuser_data = mysqli_fetch_assoc($BAresult);

                if($_SESSION['business_assurance'] = $BAuser_data['business_assurance'])
                {
                    echo "Business assurance found\n";  

                    $BA_String = implode ("", $BAuser_data);                              
                    
                    $BA_Export = intval($BA_String);

                    echo gettype($BA_Export);

                    echo $BA_Export;

                    $var_str = var_export($BAuser_data, true);
						$var = "<?php\n\n\$BA_Export = $var_str;\n\n?>";
						file_put_contents('BA.php', $var);
                        
                }
                if($BA_Export = NULL){
                $BA_Export = 0;

                echo "\nBA = 0\n";


                $var_str = var_export($BAuser_data, true);
                $var = "<?php\n\n\$BA_Export = $var_str;\n\n?>";
                file_put_contents('BA.php', $var);

                echo $BA_Export;
                }
            }
        }

        
    }

    if(!empty($Customer_Key) && is_numeric($Customer_Key))
    {
        $CLquery = "SELECT `care_level` FROM `users` WHERE Customer_Key = $Customer_Key limit 1";
        $CLresult = mysqli_query($con, $CLquery);
    
        if($CLresult)
        {
            if($CLresult && mysqli_num_rows($CLresult) > 0)
            {
                $CLuser_data = mysqli_fetch_assoc($CLresult);

                if($_SESSION['care_level'] = $CLuser_data['care_level'])
                {
                    echo "\nCare Level found\n";  

                    $CL_String = implode ("", $CLuser_data);                              
                    $CL_Export = intval($CL_String);
                    echo $CL_Export;

                    $var_str = var_export($CLuser_data, true);
						$var = "<?php\n\n\$CL_Export = $var_str;\n\n?>";
						file_put_contents('CL.php', $var);
                        
                }               
            }
        }       
    }

    if(!empty($Customer_Key) && is_numeric($Customer_Key))
    {
        $DSLquery = "SELECT `dsl_active` FROM `users` WHERE Customer_Key = $Customer_Key limit 1";
        $DSLresult = mysqli_query($con, $DSLquery);
    
        if($DSLresult)
        {
            if($DSLresult && mysqli_num_rows($DSLresult) > 0)
            {
                $DSLuser_data = mysqli_fetch_assoc($DSLresult);

                if($_SESSION['dsl_active'] = $DSLuser_data['dsl_active'])
                {
                    echo "\nDSL active found\n";  

                    $DSL_String = implode ("", $DSLuser_data);                              
                    
                    $DSL_Int = intval($DSL_String);

                    echo gettype($DSL_Int);

                    $DSL_Export = (Bool)$DSL_Int;             

                    $var_str = var_export($DSLuser_data, true);
						$var = "<?php\n\n\$DSL_Export = $var_str;\n\n?>";
						file_put_contents('DSL.php', $var);
                }
                if($DSL_Export = NULL){
                $DSL_Export = FALSE;

                echo "\nDSL = 0\n";
                echo gettype($DSL_Export);

                $var_str = var_export($DSLuser_data, true);
                $var = "<?php\n\n\$BA_Export = $var_str;\n\n?>";
                file_put_contents('DSL.php', $var);

                echo $DSL_Export;
                }
            }
        }

        
    }

 echo "\nFin\n";

?>