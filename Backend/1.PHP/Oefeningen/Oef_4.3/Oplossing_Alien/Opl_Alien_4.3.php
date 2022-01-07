<?php
//Input
$NVAVotes= readline("Hoeveel stemmen waren er voor de NVA?");
$SPAVotes= readline("Hoeveel stemmen waren er voor de SP-A?");
$CDVotes= readline ("Hoeveel stemmen waren er voor de CD&V?");
$GroenVotes= readline("Hoeveel stemmen waren er voor de Groen?");
$OpenVLDVotes= readline("Hoeveel stemmen waren er voor de Open VLD?");
$VLBelangVotes= readline("Hoeveel stemmen waren er voor de Vlaams Belang?");
$PVDAVotes= readline("Hoeveel stemmen waren er voor de PVDA?");
$VotesTotal= $NVAVotes+$SPAVotes+$CDVotes+$GroenVotes+$OpenVLDVotes+$VLBelangVotes+$PVDAVotes;


//Calculate
$NVA = $NVAVotes/$VotesTotal *100;
$SPA = $NVAVotes/$VotesTotal *100;
$CDV = $NVAVotes/$VotesTotal *100;
$Groen = $NVAVotes/$VotesTotal *100;
$VLD = $NVAVotes/$VotesTotal *100;
$Belang = $NVAVotes/$VotesTotal *100;
$PVD = $NVAVotes/$VotesTotal *100;

function Rechtsuitlijnen ($tekst, $length)
{
    $Ruimte = $length - strlen($tekst);
    ($Ruimte*" ".$tekst);
}

}
function Linksuitlijnen
{

}

//Output
Print "Totaal aantal stemmen: ".$VotesTotal . "\n";
