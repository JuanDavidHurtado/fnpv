<?php
if (isset($_REQUEST['guardar_tabla1']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_tabla1'] == 'new') {

        $sql = "INSERT INTO tabla1 (
`id_tabla1`,
`id_usuario`,
`id_proceso`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`historia`,
`tt11`,
`tt12`,
`tt13`,
`tt14`,
`tt15`,
`tt16`,
`tt17`,
`tt18`,
`tt19`,
`tt110`,
`tt111`,
`tt112`,
`tt113`,
`tt114`,
`tt115`,
`tt116`,
`tt117`,
`tt118`,
`tt119`,
`tt120`,
`tt121`,
`tt122`,
`tt123`,
`tt124`,
`tt125`,
`tt126`,
`tt127`,
`tt128`,
`tt129`,
`tt130`,
`tt131`,
`tt132`,
`tt133`,
`tt134`,
`tt135`,
`tt136`,
`tt137`,
`tt138`,
`tt139`,
`tt140`,
`tt141`,
`tt142`,
`tt143`,
`tt144`,
`tt145`,
`tt146`,
`tt147`,
`tt148`,
`tt149`,
`tt150`,
`tt151`,
`tt152`,
`tt153`,
`tt154`,
`tt155`,
`tt156`,
`tt157`,
`tt158`,
`tt159`,
`tt160`,
`tt161`,
`tt162`,
`tt163`,
`tt164`,
`tt165`,
`tt166`,
`tt167`,
`tt168`,
`tt169`,
`tt170`,
`tt171`,
`tt172`,
`tt173`,
`tt174`,
`tt175`,
`tt176`,
`tt177`,
`tt178`,
`tt179`,
`tt180`,
`tt181`,
`tt182`,
`tt183`,
`tt184`,
`tt185`,
`tt186`,
`tt187`,
`tt188`,
`tt189`,
`tt190`,
`tt191`,
`tt192`,
`tt193`,
`tt194`,
`tt195`,
`tt196`,
`tt197`,
`tt198`,
`tt199`,
`tt1100`,
`tt1101`,
`tt1102`,
`tt1103`,
`tt1104`,
`tt1105`,
`tt1106`,
`tt1107`,
`tt1108`,
`tt1109`,
`tt1110`,
`tt1111`,
`tt1112`,
`tt1113`,
`tt1114`,
`tt1115`,
`tt1116`,
`tt1117`,
`tt1118`,
`tt1119`,
`tt1120`,
`tt1121`,
`tt1122`,
`tt1123`,
`tt1124`,
`tt1125`,
`tt1126`,
`tt1127`,
`tt1128`,
`tt1129`,
`tt1130`,
`tt1131`,
`tt1132`,
`tt1133`,
`tt1134`,
`tt1135`,
`tt1136`,
`tt1137`,
`tt1138`,
`tt1139`,
`tt1140`,
`tt1141`,
`tt1142`,
`tt1143`,
`tt1144`,
`tt1145`,
`tt1146`,
`tt1147`,
`tt1148`,
`tt1149`,
`tt1150`,
`tt1151`,
`tt1152`,
`tt1153`,
`tt1154`,
`tt1155`,
`tt1156`,
`tt1157`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['tt11'] . "' ,
'" . $_REQUEST['tt12'] . "' ,
'" . $_REQUEST['tt13'] . "' ,
'" . $_REQUEST['tt14'] . "' ,
'" . $_REQUEST['tt15'] . "' ,
'" . $_REQUEST['tt16'] . "' ,
'" . $_REQUEST['tt17'] . "' ,
'" . $_REQUEST['tt18'] . "' ,
'" . $_REQUEST['tt19'] . "' ,
'" . $_REQUEST['tt110'] . "' ,
'" . $_REQUEST['tt111'] . "' ,
'" . $_REQUEST['tt112'] . "' ,
'" . $_REQUEST['tt113'] . "' ,
'" . $_REQUEST['tt114'] . "' ,
'" . $_REQUEST['tt115'] . "' ,
'" . $_REQUEST['tt116'] . "' ,
'" . $_REQUEST['tt117'] . "' ,
'" . $_REQUEST['tt118'] . "' ,
'" . $_REQUEST['tt119'] . "' ,
'" . $_REQUEST['tt120'] . "' ,
'" . $_REQUEST['tt121'] . "' ,
'" . $_REQUEST['tt122'] . "' ,
'" . $_REQUEST['tt123'] . "' ,
'" . $_REQUEST['tt124'] . "' ,
'" . $_REQUEST['tt125'] . "' ,
'" . $_REQUEST['tt126'] . "' ,
'" . $_REQUEST['tt127'] . "' ,
'" . $_REQUEST['tt128'] . "' ,
'" . $_REQUEST['tt129'] . "' ,
'" . $_REQUEST['tt130'] . "' ,
'" . $_REQUEST['tt131'] . "' ,
'" . $_REQUEST['tt132'] . "' ,
'" . $_REQUEST['tt133'] . "' ,
'" . $_REQUEST['tt134'] . "' ,
'" . $_REQUEST['tt135'] . "' ,
'" . $_REQUEST['tt136'] . "' ,
'" . $_REQUEST['tt137'] . "' ,
'" . $_REQUEST['tt138'] . "' ,
'" . $_REQUEST['tt139'] . "' ,
'" . $_REQUEST['tt140'] . "' ,
'" . $_REQUEST['tt141'] . "' ,
'" . $_REQUEST['tt142'] . "' ,
'" . $_REQUEST['tt143'] . "' ,
'" . $_REQUEST['tt144'] . "' ,
'" . $_REQUEST['tt145'] . "' ,
'" . $_REQUEST['tt146'] . "' ,
'" . $_REQUEST['tt147'] . "' ,
'" . $_REQUEST['tt148'] . "' ,
'" . $_REQUEST['tt149'] . "' ,
'" . $_REQUEST['tt150'] . "' ,
'" . $_REQUEST['tt151'] . "' ,
'" . $_REQUEST['tt152'] . "' ,
'" . $_REQUEST['tt153'] . "' ,
'" . $_REQUEST['tt154'] . "' ,
'" . $_REQUEST['tt155'] . "' ,
'" . $_REQUEST['tt156'] . "' ,
'" . $_REQUEST['tt157'] . "' ,
'" . $_REQUEST['tt158'] . "' ,
'" . $_REQUEST['tt159'] . "' ,
'" . $_REQUEST['tt160'] . "' ,
'" . $_REQUEST['tt161'] . "' ,
'" . $_REQUEST['tt162'] . "' ,
'" . $_REQUEST['tt163'] . "' ,
'" . $_REQUEST['tt164'] . "' ,
'" . $_REQUEST['tt165'] . "' ,
'" . $_REQUEST['tt166'] . "' ,
'" . $_REQUEST['tt167'] . "' ,
'" . $_REQUEST['tt168'] . "' ,
'" . $_REQUEST['tt169'] . "' ,
'" . $_REQUEST['tt170'] . "' ,
'" . $_REQUEST['tt171'] . "' ,
'" . $_REQUEST['tt172'] . "' ,
'" . $_REQUEST['tt173'] . "' ,
'" . $_REQUEST['tt174'] . "' ,
'" . $_REQUEST['tt175'] . "' ,
'" . $_REQUEST['tt176'] . "' ,
'" . $_REQUEST['tt177'] . "' ,
'" . $_REQUEST['tt178'] . "' ,
'" . $_REQUEST['tt179'] . "' ,
'" . $_REQUEST['tt180'] . "' ,
'" . $_REQUEST['tt181'] . "' ,
'" . $_REQUEST['tt182'] . "' ,
'" . $_REQUEST['tt183'] . "' ,
'" . $_REQUEST['tt184'] . "' ,
'" . $_REQUEST['tt185'] . "' ,
'" . $_REQUEST['tt186'] . "' ,
'" . $_REQUEST['tt187'] . "' ,
'" . $_REQUEST['tt188'] . "' ,
'" . $_REQUEST['tt189'] . "' ,
'" . $_REQUEST['tt190'] . "' ,
'" . $_REQUEST['tt191'] . "' ,
'" . $_REQUEST['tt192'] . "' ,
'" . $_REQUEST['tt193'] . "' ,
'" . $_REQUEST['tt194'] . "' ,
'" . $_REQUEST['tt195'] . "' ,
'" . $_REQUEST['tt196'] . "' ,
'" . $_REQUEST['tt197'] . "' ,
'" . $_REQUEST['tt198'] . "' ,
'" . $_REQUEST['tt199'] . "' ,
'" . $_REQUEST['tt1100'] . "' ,
'" . $_REQUEST['tt1101'] . "' ,
'" . $_REQUEST['tt1102'] . "' ,
'" . $_REQUEST['tt1103'] . "' ,
'" . $_REQUEST['tt1104'] . "' ,
'" . $_REQUEST['tt1105'] . "' ,
'" . $_REQUEST['tt1106'] . "' ,
'" . $_REQUEST['tt1107'] . "' ,
'" . $_REQUEST['tt1108'] . "' ,
'" . $_REQUEST['tt1109'] . "' ,
'" . $_REQUEST['tt1110'] . "' ,
'" . $_REQUEST['tt1111'] . "' ,
'" . $_REQUEST['tt1112'] . "' ,
'" . $_REQUEST['tt1113'] . "' ,
'" . $_REQUEST['tt1114'] . "' ,
'" . $_REQUEST['tt1115'] . "' ,
'" . $_REQUEST['tt1116'] . "' ,
'" . $_REQUEST['tt1117'] . "' ,
'" . $_REQUEST['tt1118'] . "' ,
'" . $_REQUEST['tt1119'] . "' ,
'" . $_REQUEST['tt1120'] . "' ,
'" . $_REQUEST['tt1121'] . "' ,
'" . $_REQUEST['tt1122'] . "' ,
'" . $_REQUEST['tt1123'] . "' ,
'" . $_REQUEST['tt1124'] . "' ,
'" . $_REQUEST['tt1125'] . "' ,
'" . $_REQUEST['tt1126'] . "' ,
'" . $_REQUEST['tt1127'] . "' ,
'" . $_REQUEST['tt1128'] . "' ,
'" . $_REQUEST['tt1129'] . "' ,
'" . $_REQUEST['tt1130'] . "' ,
'" . $_REQUEST['tt1131'] . "' ,
'" . $_REQUEST['tt1132'] . "' ,
'" . $_REQUEST['tt1133'] . "' ,
'" . $_REQUEST['tt1134'] . "' ,
'" . $_REQUEST['tt1135'] . "' ,
'" . $_REQUEST['tt1136'] . "' ,
'" . $_REQUEST['tt1137'] . "' ,
'" . $_REQUEST['tt1138'] . "' ,
'" . $_REQUEST['tt1139'] . "' ,
'" . $_REQUEST['tt1140'] . "' ,
'" . $_REQUEST['tt1141'] . "' ,
'" . $_REQUEST['tt1142'] . "' ,
'" . $_REQUEST['tt1143'] . "' ,
'" . $_REQUEST['tt1144'] . "' ,
'" . $_REQUEST['tt1145'] . "' ,
'" . $_REQUEST['tt1146'] . "' ,
'" . $_REQUEST['tt1147'] . "' ,
'" . $_REQUEST['tt1148'] . "' ,
'" . $_REQUEST['tt1149'] . "' ,
'" . $_REQUEST['tt1150'] . "' ,
'" . $_REQUEST['tt1151'] . "' ,
'" . $_REQUEST['tt1152'] . "' ,
'" . $_REQUEST['tt1153'] . "' ,
'" . $_REQUEST['tt1154'] . "' ,
'" . $_REQUEST['tt1155'] . "' ,
'" . $_REQUEST['tt1156'] . "' ,
'" . $_REQUEST['tt1157'] . "' 
) ";
    } else if ($_REQUEST['id_tabla1'] != '') {

        $sql = "UPDATE tabla1 set 
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`tt11` = '" . $_REQUEST['tt11'] . "' ,
`tt12` = '" . $_REQUEST['tt12'] . "' ,
`tt13` = '" . $_REQUEST['tt13'] . "' ,
`tt14` = '" . $_REQUEST['tt14'] . "' ,
`tt15` = '" . $_REQUEST['tt15'] . "' ,
`tt16` = '" . $_REQUEST['tt16'] . "' ,
`tt17` = '" . $_REQUEST['tt17'] . "' ,
`tt18` = '" . $_REQUEST['tt18'] . "' ,
`tt19` = '" . $_REQUEST['tt19'] . "' ,
`tt110` = '" . $_REQUEST['tt110'] . "' ,
`tt111` = '" . $_REQUEST['tt111'] . "' ,
`tt112` = '" . $_REQUEST['tt112'] . "' ,
`tt113` = '" . $_REQUEST['tt113'] . "' ,
`tt114` = '" . $_REQUEST['tt114'] . "' ,
`tt115` = '" . $_REQUEST['tt115'] . "' ,
`tt116` = '" . $_REQUEST['tt116'] . "' ,
`tt117` = '" . $_REQUEST['tt117'] . "' ,
`tt118` = '" . $_REQUEST['tt118'] . "' ,
`tt119` = '" . $_REQUEST['tt119'] . "' ,
`tt120` = '" . $_REQUEST['tt120'] . "' ,
`tt121` = '" . $_REQUEST['tt121'] . "' ,
`tt122` = '" . $_REQUEST['tt122'] . "' ,
`tt123` = '" . $_REQUEST['tt123'] . "' ,
`tt124` = '" . $_REQUEST['tt124'] . "' ,
`tt125` = '" . $_REQUEST['tt125'] . "' ,
`tt126` = '" . $_REQUEST['tt126'] . "' ,
`tt127` = '" . $_REQUEST['tt127'] . "' ,
`tt128` = '" . $_REQUEST['tt128'] . "' ,
`tt129` = '" . $_REQUEST['tt129'] . "' ,
`tt130` = '" . $_REQUEST['tt130'] . "' ,
`tt131` = '" . $_REQUEST['tt131'] . "' ,
`tt132` = '" . $_REQUEST['tt132'] . "' ,
`tt133` = '" . $_REQUEST['tt133'] . "' ,
`tt134` = '" . $_REQUEST['tt134'] . "' ,
`tt135` = '" . $_REQUEST['tt135'] . "' ,
`tt136` = '" . $_REQUEST['tt136'] . "' ,
`tt137` = '" . $_REQUEST['tt137'] . "' ,
`tt138` = '" . $_REQUEST['tt138'] . "' ,
`tt139` = '" . $_REQUEST['tt139'] . "' ,
`tt140` = '" . $_REQUEST['tt140'] . "' ,
`tt141` = '" . $_REQUEST['tt141'] . "' ,
`tt142` = '" . $_REQUEST['tt142'] . "' ,
`tt143` = '" . $_REQUEST['tt143'] . "' ,
`tt144` = '" . $_REQUEST['tt144'] . "' ,
`tt145` = '" . $_REQUEST['tt145'] . "' ,
`tt146` = '" . $_REQUEST['tt146'] . "' ,
`tt147` = '" . $_REQUEST['tt147'] . "' ,
`tt148` = '" . $_REQUEST['tt148'] . "' ,
`tt149` = '" . $_REQUEST['tt149'] . "' ,
`tt150` = '" . $_REQUEST['tt150'] . "' ,
`tt151` = '" . $_REQUEST['tt151'] . "' ,
`tt152` = '" . $_REQUEST['tt152'] . "' ,
`tt153` = '" . $_REQUEST['tt153'] . "' ,
`tt154` = '" . $_REQUEST['tt154'] . "' ,
`tt155` = '" . $_REQUEST['tt155'] . "' ,
`tt156` = '" . $_REQUEST['tt156'] . "' ,
`tt157` = '" . $_REQUEST['tt157'] . "' ,
`tt158` = '" . $_REQUEST['tt158'] . "' ,
`tt159` = '" . $_REQUEST['tt159'] . "' ,
`tt160` = '" . $_REQUEST['tt160'] . "' ,
`tt161` = '" . $_REQUEST['tt161'] . "' ,
`tt162` = '" . $_REQUEST['tt162'] . "' ,
`tt163` = '" . $_REQUEST['tt163'] . "' ,
`tt164` = '" . $_REQUEST['tt164'] . "' ,
`tt165` = '" . $_REQUEST['tt165'] . "' ,
`tt166` = '" . $_REQUEST['tt166'] . "' ,
`tt167` = '" . $_REQUEST['tt167'] . "' ,
`tt168` = '" . $_REQUEST['tt168'] . "' ,
`tt169` = '" . $_REQUEST['tt169'] . "' ,
`tt170` = '" . $_REQUEST['tt170'] . "' ,
`tt171` = '" . $_REQUEST['tt171'] . "' ,
`tt172` = '" . $_REQUEST['tt172'] . "' ,
`tt173` = '" . $_REQUEST['tt173'] . "' ,
`tt174` = '" . $_REQUEST['tt174'] . "' ,
`tt175` = '" . $_REQUEST['tt175'] . "' ,
`tt176` = '" . $_REQUEST['tt176'] . "' ,
`tt177` = '" . $_REQUEST['tt177'] . "' ,
`tt178` = '" . $_REQUEST['tt178'] . "' ,
`tt179` = '" . $_REQUEST['tt179'] . "' ,
`tt180` = '" . $_REQUEST['tt180'] . "' ,
`tt181` = '" . $_REQUEST['tt181'] . "' ,
`tt182` = '" . $_REQUEST['tt182'] . "' ,
`tt183` = '" . $_REQUEST['tt183'] . "' ,
`tt184` = '" . $_REQUEST['tt184'] . "' ,
`tt185` = '" . $_REQUEST['tt185'] . "' ,
`tt186` = '" . $_REQUEST['tt186'] . "' ,
`tt187` = '" . $_REQUEST['tt187'] . "' ,
`tt188` = '" . $_REQUEST['tt188'] . "' ,
`tt189` = '" . $_REQUEST['tt189'] . "' ,
`tt190` = '" . $_REQUEST['tt190'] . "' ,
`tt191` = '" . $_REQUEST['tt191'] . "' ,
`tt192` = '" . $_REQUEST['tt192'] . "' ,
`tt193` = '" . $_REQUEST['tt193'] . "' ,
`tt194` = '" . $_REQUEST['tt194'] . "' ,
`tt195` = '" . $_REQUEST['tt195'] . "' ,
`tt196` = '" . $_REQUEST['tt196'] . "' ,
`tt197` = '" . $_REQUEST['tt197'] . "' ,
`tt198` = '" . $_REQUEST['tt198'] . "' ,
`tt199` = '" . $_REQUEST['tt199'] . "' ,
`tt1100` = '" . $_REQUEST['tt1100'] . "' ,
`tt1101` = '" . $_REQUEST['tt1101'] . "' ,
`tt1102` = '" . $_REQUEST['tt1102'] . "' ,
`tt1103` = '" . $_REQUEST['tt1103'] . "' ,
`tt1104` = '" . $_REQUEST['tt1104'] . "' ,
`tt1105` = '" . $_REQUEST['tt1105'] . "' ,
`tt1106` = '" . $_REQUEST['tt1106'] . "' ,
`tt1107` = '" . $_REQUEST['tt1107'] . "' ,
`tt1108` = '" . $_REQUEST['tt1108'] . "' ,
`tt1109` = '" . $_REQUEST['tt1109'] . "' ,
`tt1110` = '" . $_REQUEST['tt1110'] . "' ,
`tt1111` = '" . $_REQUEST['tt1111'] . "' ,
`tt1112` = '" . $_REQUEST['tt1112'] . "' ,
`tt1113` = '" . $_REQUEST['tt1113'] . "' ,
`tt1114` = '" . $_REQUEST['tt1114'] . "' ,
`tt1115` = '" . $_REQUEST['tt1115'] . "' ,
`tt1116` = '" . $_REQUEST['tt1116'] . "' ,
`tt1117` = '" . $_REQUEST['tt1117'] . "' ,
`tt1118` = '" . $_REQUEST['tt1118'] . "' ,
`tt1119` = '" . $_REQUEST['tt1119'] . "' ,
`tt1120` = '" . $_REQUEST['tt1120'] . "' ,
`tt1121` = '" . $_REQUEST['tt1121'] . "' ,
`tt1122` = '" . $_REQUEST['tt1122'] . "' ,
`tt1123` = '" . $_REQUEST['tt1123'] . "' ,
`tt1124` = '" . $_REQUEST['tt1124'] . "' ,
`tt1125` = '" . $_REQUEST['tt1125'] . "' ,
`tt1126` = '" . $_REQUEST['tt1126'] . "' ,
`tt1127` = '" . $_REQUEST['tt1127'] . "' ,
`tt1128` = '" . $_REQUEST['tt1128'] . "' ,
`tt1129` = '" . $_REQUEST['tt1129'] . "' ,
`tt1130` = '" . $_REQUEST['tt1130'] . "' ,
`tt1131` = '" . $_REQUEST['tt1131'] . "' ,
`tt1132` = '" . $_REQUEST['tt1132'] . "' ,
`tt1133` = '" . $_REQUEST['tt1133'] . "' ,
`tt1134` = '" . $_REQUEST['tt1134'] . "' ,
`tt1135` = '" . $_REQUEST['tt1135'] . "' ,
`tt1136` = '" . $_REQUEST['tt1136'] . "' ,
`tt1137` = '" . $_REQUEST['tt1137'] . "' ,
`tt1138` = '" . $_REQUEST['tt1138'] . "' ,
`tt1139` = '" . $_REQUEST['tt1139'] . "' ,
`tt1140` = '" . $_REQUEST['tt1140'] . "' ,
`tt1141` = '" . $_REQUEST['tt1141'] . "' ,
`tt1142` = '" . $_REQUEST['tt1142'] . "' ,
`tt1143` = '" . $_REQUEST['tt1143'] . "' ,
`tt1144` = '" . $_REQUEST['tt1144'] . "' ,
`tt1145` = '" . $_REQUEST['tt1145'] . "' ,
`tt1146` = '" . $_REQUEST['tt1146'] . "' ,
`tt1147` = '" . $_REQUEST['tt1147'] . "' ,
`tt1148` = '" . $_REQUEST['tt1148'] . "' ,
`tt1149` = '" . $_REQUEST['tt1149'] . "' ,
`tt1150` = '" . $_REQUEST['tt1150'] . "' ,
`tt1151` = '" . $_REQUEST['tt1151'] . "' ,
`tt1152` = '" . $_REQUEST['tt1152'] . "' ,
`tt1153` = '" . $_REQUEST['tt1153'] . "' ,
`tt1154` = '" . $_REQUEST['tt1154'] . "' ,
`tt1155` = '" . $_REQUEST['tt1155'] . "' ,
`tt1156` = '" . $_REQUEST['tt1156'] . "' ,
`tt1157` = '" . $_REQUEST['tt1157'] . "' WHERE `id_tabla1` = '" . $_REQUEST['id_tabla1'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_tabla1 = 'new';
$sql = "SELECT * from tabla1 WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_tabla1 = $row['id_tabla1'];
    
    $tt11 = $row['tt11'];
    $tt12 = $row['tt12'];
    $tt13 = $row['tt13'];
    $tt14 = $row['tt14'];
    $tt15 = $row['tt15'];
    $tt16 = $row['tt16'];
    $tt17 = $row['tt17'];
    $tt18 = $row['tt18'];
    $tt19 = $row['tt19'];
    $tt110 = $row['tt110'];
    $tt111 = $row['tt111'];
    $tt112 = $row['tt112'];
    $tt113 = $row['tt113'];
    $tt114 = $row['tt114'];
    $tt115 = $row['tt115'];
    $tt116 = $row['tt116'];
    $tt117 = $row['tt117'];
    $tt118 = $row['tt118'];
    $tt119 = $row['tt119'];
    $tt120 = $row['tt120'];
    $tt121 = $row['tt121'];
    $tt122 = $row['tt122'];
    $tt123 = $row['tt123'];
    $tt124 = $row['tt124'];
    $tt125 = $row['tt125'];
    $tt126 = $row['tt126'];
    $tt127 = $row['tt127'];
    $tt128 = $row['tt128'];
    $tt129 = $row['tt129'];
    $tt130 = $row['tt130'];
    $tt131 = $row['tt131'];
    $tt132 = $row['tt132'];
    $tt133 = $row['tt133'];
    $tt134 = $row['tt134'];
    $tt135 = $row['tt135'];
    $tt136 = $row['tt136'];
    $tt137 = $row['tt137'];
    $tt138 = $row['tt138'];
    $tt139 = $row['tt139'];
    $tt140 = $row['tt140'];
    $tt141 = $row['tt141'];
    $tt142 = $row['tt142'];
    $tt143 = $row['tt143'];
    $tt144 = $row['tt144'];
    $tt145 = $row['tt145'];
    $tt146 = $row['tt146'];
    $tt147 = $row['tt147'];
    $tt148 = $row['tt148'];
    $tt149 = $row['tt149'];
    $tt150 = $row['tt150'];
    $tt151 = $row['tt151'];
    $tt152 = $row['tt152'];
    $tt153 = $row['tt153'];
    $tt154 = $row['tt154'];
    $tt155 = $row['tt155'];
    $tt156 = $row['tt156'];
    $tt157 = $row['tt157'];
    $tt158 = $row['tt158'];
    $tt159 = $row['tt159'];
    $tt160 = $row['tt160'];
    $tt161 = $row['tt161'];
    $tt162 = $row['tt162'];
    $tt163 = $row['tt163'];
    $tt164 = $row['tt164'];
    $tt165 = $row['tt165'];
    $tt166 = $row['tt166'];
    $tt167 = $row['tt167'];
    $tt168 = $row['tt168'];
    $tt169 = $row['tt169'];
    $tt170 = $row['tt170'];
    $tt171 = $row['tt171'];
    $tt172 = $row['tt172'];
    $tt173 = $row['tt173'];
    $tt174 = $row['tt174'];
    $tt175 = $row['tt175'];
    $tt176 = $row['tt176'];
    $tt177 = $row['tt177'];
    $tt178 = $row['tt178'];
    $tt179 = $row['tt179'];
    $tt180 = $row['tt180'];
    $tt181 = $row['tt181'];
    $tt182 = $row['tt182'];
    $tt183 = $row['tt183'];
    $tt184 = $row['tt184'];
    $tt185 = $row['tt185'];
    $tt186 = $row['tt186'];
    $tt187 = $row['tt187'];
    $tt188 = $row['tt188'];
    $tt189 = $row['tt189'];
    $tt190 = $row['tt190'];
    $tt191 = $row['tt191'];
    $tt192 = $row['tt192'];
    $tt193 = $row['tt193'];
    $tt194 = $row['tt194'];
    $tt195 = $row['tt195'];
    $tt196 = $row['tt196'];
    $tt197 = $row['tt197'];
    $tt198 = $row['tt198'];
    $tt199 = $row['tt199'];
    $tt1100 = $row['tt1100'];
    $tt1101 = $row['tt1101'];
    $tt1102 = $row['tt1102'];
    $tt1103 = $row['tt1103'];
    $tt1104 = $row['tt1104'];
    $tt1105 = $row['tt1105'];
    $tt1106 = $row['tt1106'];
    $tt1107 = $row['tt1107'];
    $tt1108 = $row['tt1108'];
    $tt1109 = $row['tt1109'];
    $tt1110 = $row['tt1110'];
    $tt1111 = $row['tt1111'];
    $tt1112 = $row['tt1112'];
    $tt1113 = $row['tt1113'];
    $tt1114 = $row['tt1114'];
    $tt1115 = $row['tt1115'];
    $tt1116 = $row['tt1116'];
    $tt1117 = $row['tt1117'];
    $tt1118 = $row['tt1118'];
    $tt1119 = $row['tt1119'];
    $tt1120 = $row['tt1120'];
    $tt1121 = $row['tt1121'];
    $tt1122 = $row['tt1122'];
    $tt1123 = $row['tt1123'];
    $tt1124 = $row['tt1124'];
    $tt1125 = $row['tt1125'];
    $tt1126 = $row['tt1126'];
    $tt1127 = $row['tt1127'];
    $tt1128 = $row['tt1128'];
    $tt1129 = $row['tt1129'];
    $tt1130 = $row['tt1130'];
    $tt1131 = $row['tt1131'];
    $tt1132 = $row['tt1132'];
    $tt1133 = $row['tt1133'];
    $tt1134 = $row['tt1134'];
    $tt1135 = $row['tt1135'];
    $tt1136 = $row['tt1136'];
    $tt1137 = $row['tt1137'];
    $tt1138 = $row['tt1138'];
    $tt1139 = $row['tt1139'];
    $tt1140 = $row['tt1140'];
    $tt1141 = $row['tt1141'];
    $tt1142 = $row['tt1142'];
    $tt1143 = $row['tt1143'];
    $tt1144 = $row['tt1144'];
    $tt1145 = $row['tt1145'];
    $tt1146 = $row['tt1146'];
    $tt1147 = $row['tt1147'];
    $tt1148 = $row['tt1148'];
    $tt1149 = $row['tt1149'];
    $tt1150 = $row['tt1150'];
    $tt1151 = $row['tt1151'];
    $tt1152 = $row['tt1152'];
    $tt1153 = $row['tt1153'];
    $tt1154 = $row['tt1154'];
    $tt1155 = $row['tt1155'];
    $tt1156 = $row['tt1156'];
    $tt1157 = $row['tt1157'];
    break;
}
?>
<script>

    $(function() {

        $("#close-tabla1").click(function() {
            $("#open-tabla1").show();
            $(this).hide();
            $("#content-tabla1").hide('slow');
        });

        $("#open-tabla1").click(function() {
            $("#close-tabla1").show();
            $(this).hide();
            $("#content-tabla1").show('slow');
        });

    });

</script>
<fieldset id="tabla1">
    <legend align="left"> <div class="arrow-c" id="close-tabla1"></div> <div class="arrow-o" id="open-tabla1" ></div> <font>Valoracion fisioterapia de neurorehabilitacion - Standard neurological classification of spinal cord injury</font></legend>
    <div id="content-tabla1">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_tabla1" id="guardar_tabla1" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_tabla1" name="form_tabla1" action="<?php echo @$action_form_tabla1 ?>#tabla1" method="post">

            <input type="hidden" id="id_tabla1" name="id_tabla1" value="<?php echo @$id_tabla1 ?>" />

            <table class="text_small2" width='900' border='0' cellpading='0' cellspacing='0'>

                <tbody><tr><td width="122">&nbsp;</td><td width="144">&nbsp;</td><td width="144">R</td><td width="9">&nbsp;</td><td width="144">L</td><td width="144">&nbsp;</td><td width="144">&nbsp;</td><td width="8">&nbsp;</td><td width="144">&nbsp;</td><td width="8">&nbsp;</td><td width="25">&nbsp;</td><td width="144">&nbsp;</td><td width="9">&nbsp;</td><td width="144">&nbsp;</td><td width="8">&nbsp;</td><td width="144">&nbsp;</td><td width="9">&nbsp;</td><td width="144">&nbsp;</td>
                        <td colspan="7" rowspan="30" valign='top'><image src='<?php echo $GLOBALS['raiz'] ?>mvc/vista/imagenes/iscos.png' width='210'/></td></tr>
                    <tr><td>&nbsp;</td><td>C5</td>
                        <td><input type="text" class="input_txt valid" id="tt11" name="tt11"  value="<?php echo $tt11; ?>"></td>
                        <td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt12" name="tt12"  value="<?php echo $tt12; ?>"></td>
                        <td>Elbow flexor</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td>&nbsp;</td><td>C6</td>
                        <td><input type="text" class="input_txt valid" id="tt13" name="tt13"  value="<?php echo $tt13; ?>"></td>
                        <td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt14" name="tt14"  value="<?php echo $tt14; ?>"></td>
                        <td>Wrist extensors</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>R</td><td>&nbsp;</td><td>L</td><td>&nbsp;</td><td>R</td><td>&nbsp;</td><td>L</td></tr>
                    <tr><td>&nbsp;</td><td>C7</td>
                        <td><input type="text" class="input_txt valid" id="tt15" name="tt15"  value="<?php echo $tt15; ?>"></td>
                        <td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt16" name="tt16"  value="<?php echo $tt16; ?>"></td>
                        <td>Elbow extensors</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>C2</td>
                        <td><input type="text" class="input_txt valid" id="tt17" name="tt17"  value="<?php echo $tt17; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt18" name="tt18"  value="<?php echo $tt18; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt19" name="tt19"  value="<?php echo $tt19; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt110" name="tt110"  value="<?php echo $tt110; ?>"></td></tr>
                    <tr><td>&nbsp;</td><td>C8</td>
                        <td><input type="text" class="input_txt valid" id="tt111" name="tt111"  value="<?php echo $tt111; ?>"></td>
                        <td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt112" name="tt112"  value="<?php echo $tt112; ?>"></td>
                        <td>finger flexors </td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>C3</td>
                        <td><input type="text" class="input_txt valid" id="tt113" name="tt113"  value="<?php echo $tt113; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt114" name="tt114"  value="<?php echo $tt114; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt115" name="tt115"  value="<?php echo $tt115; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt116" name="tt116"  value="<?php echo $tt116; ?>"></td></tr>
                    <tr><td>&nbsp;</td><td>T1</td>
                        <td><input type="text" class="input_txt valid" id="tt117" name="tt117"  value="<?php echo $tt117; ?>"></td>
                        <td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt118" name="tt118"  value="<?php echo $tt118; ?>"></td>
                        <td>finger abducttors </td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>C4</td>
                        <td><input type="text" class="input_txt valid" id="tt119" name="tt119"  value="<?php echo $tt119; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt120" name="tt120"  value="<?php echo $tt120; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt121" name="tt121"  value="<?php echo $tt121; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt122" name="tt122"  value="<?php echo $tt122; ?>"></td>
                        </tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>C5</td>
                        <td><input type="text" class="input_txt valid" id="tt123" name="tt123"  value="<?php echo $tt123; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt124" name="tt124"  value="<?php echo $tt124; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt125" name="tt125"  value="<?php echo $tt125; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt126" name="tt126"  value="<?php echo $tt126; ?>"></td>
                        </tr>
                    <tr><td>UPPER LIMB</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>C6</td>
                        <td><input type="text" class="input_txt valid" id="tt127" name="tt127"  value="<?php echo $tt127; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt128" name="tt128"  value="<?php echo $tt128; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt129" name="tt129"  value="<?php echo $tt129; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt130" name="tt130"  value="<?php echo $tt130; ?>"></td>
                        </tr>
                    <tr><td>TOTAL</td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt131" name="tt131"  value="<?php echo $tt131; ?>"></td>
                        <td>+</td>
                        <td><input type="text" class="input_txt valid" id="tt132" name="tt132"  value="<?php echo $tt132; ?>"></td>
                        <td><input type="text" class="input_txt valid" id="tt133" name="tt133"  value="<?php echo $tt133; ?>"></td>
                        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>C7</td>
                        <td><input type="text" class="input_txt valid" id="tt134" name="tt134"  value="<?php echo $tt134; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt135" name="tt135"  value="<?php echo $tt135; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt136" name="tt136"  value="<?php echo $tt136; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt137" name="tt137"  value="<?php echo $tt137; ?>"></td>
                        </tr>
                    <tr><td>(MAXIMUN)</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>C8</td>
                        <td><input type="text" class="input_txt valid" id="tt138" name="tt138"  value="<?php echo $tt138; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt139" name="tt139"  value="<?php echo $tt139; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt140" name="tt140"  value="<?php echo $tt140; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt141" name="tt141"  value="<?php echo $tt141; ?>"></td>
                        </tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>T1</td>
                        <td><input type="text" class="input_txt valid" id="tt142" name="tt142"  value="<?php echo $tt142; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt143" name="tt143"  value="<?php echo $tt143; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt144" name="tt144"  value="<?php echo $tt144; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt145" name="tt145"  value="<?php echo $tt145; ?>"></td>
                        </tr>
                    <tr><td>Comments:</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>T2</td>
                        <td><input type="text" class="input_txt valid" id="tt146" name="tt146"  value="<?php echo $tt146; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt147" name="tt147"  value="<?php echo $tt147; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt148" name="tt148"  value="<?php echo $tt148; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt149" name="tt149"  value="<?php echo $tt149; ?>"></td>
                        </tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>T3</td>
                        <td><input type="text" class="input_txt valid" id="tt150" name="tt150"  value="<?php echo $tt150; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt151" name="tt151"  value="<?php echo $tt151; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt152" name="tt152"  value="<?php echo $tt152; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt153" name="tt153"  value="<?php echo $tt153; ?>"></td>
                        </tr>
                    <tr>
                        <td colspan="6" rowspan="7"><textarea cols="40" rows="13" id="tt1157" name="tt1157"><?php echo $tt1157; ?></textarea></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>T4</td>
                        <td><input type="text" class="input_txt valid" id="tt154" name="tt154"  value="<?php echo $tt154; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt155" name="tt155"  value="<?php echo $tt155; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt156" name="tt156"  value="<?php echo $tt156; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt157" name="tt157"  value="<?php echo $tt157; ?>"></td>
                        </tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>T5</td>
                        <td><input type="text" class="input_txt valid" id="tt158" name="tt158"  value="<?php echo $tt158; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt159" name="tt159"  value="<?php echo $tt159; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt160" name="tt160"  value="<?php echo $tt160; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt161" name="tt161"  value="<?php echo $tt161; ?>"></td>
                        </tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>T6</td>
                        <td><input type="text" class="input_txt valid" id="tt162" name="tt162"  value="<?php echo $tt162; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt163" name="tt163"  value="<?php echo $tt163; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt164" name="tt164"  value="<?php echo $tt164; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt165" name="tt165"  value="<?php echo $tt165; ?>"></td>
                        </tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>T7</td>
                        <td><input type="text" class="input_txt valid" id="tt166" name="tt166"  value="<?php echo $tt166; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt167" name="tt167"  value="<?php echo $tt167; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt168" name="tt168"  value="<?php echo $tt168; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt169" name="tt169"  value="<?php echo $tt169; ?>"></td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>T8</td>
                        <td><input type="text" class="input_txt valid" id="tt170" name="tt170"  value="<?php echo $tt170; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt171" name="tt171"  value="<?php echo $tt171; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt172" name="tt172"  value="<?php echo $tt172; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt173" name="tt173"  value="<?php echo $tt173; ?>"></td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>T9</td>
                        <td><input type="text" class="input_txt valid" id="tt174" name="tt174"  value="<?php echo $tt174; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt175" name="tt175"  value="<?php echo $tt175; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt176" name="tt176"  value="<?php echo $tt176; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt177" name="tt177"  value="<?php echo $tt177; ?>"></td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>T10</td>
                        <td><input type="text" class="input_txt valid" id="tt178" name="tt178"  value="<?php echo $tt178; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt179" name="tt179"  value="<?php echo $tt179; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt180" name="tt180"  value="<?php echo $tt180; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt181" name="tt181"  value="<?php echo $tt181; ?>"></td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>T11</td>
                        <td><input type="text" class="input_txt valid" id="tt182" name="tt182"  value="<?php echo $tt182; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt183" name="tt183"  value="<?php echo $tt183; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt184" name="tt184"  value="<?php echo $tt184; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt185" name="tt185"  value="<?php echo $tt185; ?>"></td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>T12</td>
                        <td><input type="text" class="input_txt valid" id="tt186" name="tt186"  value="<?php echo $tt186; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt187" name="tt187"  value="<?php echo $tt187; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt188" name="tt188"  value="<?php echo $tt188; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt189" name="tt189"  value="<?php echo $tt189; ?>"></td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>L1</td>
                        <td><input type="text" class="input_txt valid" id="tt190" name="tt190"  value="<?php echo $tt190; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt191" name="tt191"  value="<?php echo $tt191; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt192" name="tt192"  value="<?php echo $tt192; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt193" name="tt193"  value="<?php echo $tt193; ?>"></td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>L2</td>
                        <td><input type="text" class="input_txt valid" id="tt194" name="tt194"  value="<?php echo $tt194; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt195" name="tt195"  value="<?php echo $tt195; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt196" name="tt196"  value="<?php echo $tt196; ?>"></td>
                        <td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt197" name="tt197"  value="<?php echo $tt197; ?>"></td></tr>
                    <tr><td>&nbsp;</td><td>L2</td>
                        <td><input type="text" class="input_txt valid" id="tt198" name="tt198"  value="<?php echo $tt198; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt199" name="tt199"  value="<?php echo $tt199; ?>"></td><td>Hip flexors</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>L3</td>
                        <td><input type="text" class="input_txt valid" id="tt1100" name="tt1100"  value="<?php echo $tt1100; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1101" name="tt1101"  value="<?php echo $tt1101; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1102" name="tt1102"  value="<?php echo $tt1102; ?>"></td>
                        <td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1103" name="tt1103"  value="<?php echo $tt1103; ?>"></td></tr>
                    <tr><td>&nbsp;</td><td>L3</td>
                        <td><input type="text" class="input_txt valid" id="tt1104" name="tt1104"  value="<?php echo $tt1104; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1105" name="tt1105"  value="<?php echo $tt1105; ?>"></td><td>knee extensors</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>L4</td>
                        <td><input type="text" class="input_txt valid" id="tt1106" name="tt1106"  value="<?php echo $tt1106; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1107" name="tt1107"  value="<?php echo $tt1107; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1108" name="tt1108"  value="<?php echo $tt1108; ?>"></td>
                        <td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1109" name="tt1109"  value="<?php echo $tt1109; ?>"></td></tr>
                    <tr><td>&nbsp;</td><td>L4</td>
                        <td><input type="text" class="input_txt valid" id="tt1110" name="tt1110"  value="<?php echo $tt1110; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1111" name="tt1111"  value="<?php echo $tt1111; ?>"></td><td>Ankle dorsiflexors</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>L5</td>
                        <td><input type="text" class="input_txt valid" id="tt1112" name="tt1112"  value="<?php echo $tt1112; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1113" name="tt1113"  value="<?php echo $tt1113; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1114" name="tt1114"  value="<?php echo $tt1114; ?>"></td>
                        <td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1115" name="tt1115"  value="<?php echo $tt1115; ?>"></td></tr>
                    <tr><td>&nbsp;</td><td>L5</td>
                        <td><input type="text" class="input_txt valid" id="tt1116" name="tt1116"  value="<?php echo $tt1116; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1117" name="tt1117"  value="<?php echo $tt1117; ?>"></td><td>Long loe extensors</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>S1</td>
                        <td><input type="text" class="input_txt valid" id="tt1118" name="tt1118"  value="<?php echo $tt1118; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1119" name="tt1119"  value="<?php echo $tt1119; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1120" name="tt1120"  value="<?php echo $tt1120; ?>"></td>
                        <td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1121" name="tt1121"  value="<?php echo $tt1121; ?>"></td></tr>
                    <tr><td>&nbsp;</td><td>S1</td>
                        <td><input type="text" class="input_txt valid" id="tt1122" name="tt1122"  value="<?php echo $tt1122; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1123" name="tt1123"  value="<?php echo $tt1123; ?>"></td><td>Ankie plantar flexors</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>S2</td>
                        <td><input type="text" class="input_txt valid" id="tt1124" name="tt1124"  value="<?php echo $tt1124; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1125" name="tt1125"  value="<?php echo $tt1125; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1126" name="tt1126"  value="<?php echo $tt1126; ?>"></td>
                        <td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1127" name="tt1127"  value="<?php echo $tt1127; ?>"></td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>S3</td>
                        <td><input type="text" class="input_txt valid" id="tt1128" name="tt1128"  value="<?php echo $tt1128; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1129" name="tt1129"  value="<?php echo $tt1129; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1130" name="tt1130"  value="<?php echo $tt1130; ?>"></td>
                        <td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1131" name="tt1131"  value="<?php echo $tt1131; ?>"></td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Voluntary anal contraction</td>
                        <td><input type="text" class="input_txt valid" id="tt1132" name="tt1132"  value="<?php echo $tt1132; ?>"></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>S4-5</td>
                        <td><input type="text" class="input_txt valid" id="tt1133" name="tt1133"  value="<?php echo $tt1133; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1134" name="tt1134"  value="<?php echo $tt1134; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1135" name="tt1135"  value="<?php echo $tt1135; ?>"></td>
                        <td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1136" name="tt1136"  value="<?php echo $tt1136; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1137" name="tt1137"  value="<?php echo $tt1137; ?>"></td><td>Any ana sensation (Yes / No)</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>(yes/no)</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1138" name="tt1138"  value="<?php echo $tt1138; ?>"></td><td>+</td>
                        <td><input type="text" class="input_txt valid" id="tt1139" name="tt1139"  value="<?php echo $tt1139; ?>"></td><td>=</td>
                        <td><input type="text" class="input_txt valid" id="tt1140" name="tt1140"  value="<?php echo $tt1140; ?>"></td><td>PIN PRICK SCORE </td><td> (max. 112)</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>TOTALS {</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1141" name="tt1141"  value="<?php echo $tt1141; ?>"></td><td>+</td>
                        <td><input type="text" class="input_txt valid" id="tt1142" name="tt1142"  value="<?php echo $tt1142; ?>"></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td>LOWER LIMB</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>(MAXIMUM)</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1143" name="tt1143"  value="<?php echo $tt1143; ?>"></td><td>LIGHT TOUCH SCORE </td><td> (max. 112)</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td>TOTAL</td>
                        <td><input type="text" class="input_txt valid" id="tt1144" name="tt1144"  value="<?php echo $tt1144; ?>"></td><td>&nbsp;</td><td>+</td>
                        <td><input type="text" class="input_txt valid" id="tt1145" name="tt1145"  value="<?php echo $tt1145; ?>"></td><td>=</td>
                        <td><input type="text" class="input_txt valid" id="tt1146" name="tt1146"  value="<?php echo $tt1146; ?>"></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td>(MAXIMUM)</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td>NEUROLOGICAL</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td colspan="9" rowspan="2">ZONA OF PARTIALPRESERVATION</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td>LEVEL</td><td>&nbsp;</td><td>R</td><td>&nbsp;</td><td>L</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>R</td><td>&nbsp;</td><td>L</td><td>&nbsp;</td></tr>
                    <tr><td>SENSORY</td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1147" name="tt1147"  value="<?php echo $tt1147; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1148" name="tt1148"  value="<?php echo $tt1148; ?>"></td><td colspan="2" rowspan="2">COMPLETE OR INCOPLETE?</td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1149" name="tt1149"  value="<?php echo $tt1149; ?>"></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>SENSORY</td>
                        <td><input type="text" class="input_txt valid" id="tt1150" name="tt1150"  value="<?php echo $tt1150; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1151" name="tt1151"  value="<?php echo $tt1151; ?>"></td><td>&nbsp;</td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td>MOTOR</td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1152" name="tt1152"  value="<?php echo $tt1152; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1153" name="tt1153"  value="<?php echo $tt1153; ?>"></td><td colspan="2" rowspan="2">ASIA IMPAIRMENT SCALE </td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1154" name="tt1154"  value="<?php echo $tt1154; ?>"></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>MOTOR</td>
                        <td><input type="text" class="input_txt valid" id="tt1155" name="tt1155"  value="<?php echo $tt1155; ?>"></td><td>&nbsp;</td>
                        <td><input type="text" class="input_txt valid" id="tt1156" name="tt1156"  value="<?php echo $tt1156; ?>"></td><td>&nbsp;</td></tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td></td></tr>
                </tbody>

            </table>
            <br>


            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>
