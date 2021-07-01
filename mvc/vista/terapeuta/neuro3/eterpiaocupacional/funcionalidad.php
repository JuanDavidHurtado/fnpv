<?php
if (isset($_REQUEST['guardar_funcionalidad_adulto']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_funcionalidad_adulto'] == 'new') {

        $sql = "INSERT INTO funcionalidad_adulto (
`id_funcionalidad_adulto`,
`id_proceso`,
`id_usuario`,
`historia`,
`fuerza`,
`t1`,
`t2`,
`t3`,
`t4`,
`t5`,
`t6`,
`t7`,
`t8`,
`t9`,
`t10`,
`t11`,
`t12`,
`t13`,
`t14`,
`t15`,
`t16`,
`t17`,
`t18`,
`t19`,
`t20`,
`t21`,
`t22`,
`t23`,
`t24`,
`t25`,
`t26`,
`t27`,
`t28`,
`t29`,
`t50`,
`t30`,
`t31`,
`t32`,
`t33`,
`t34`,
`t35`,
`t36`,
`t37`,
`t38`,
`t39`,
`t40`,
`t41`,
`t42`,
`t43`,
`t44`,
`t45`,
`t46`,
`t47`,
`t48`,
`t49`,
`t51`,
`t52`,
`t53`,
`t54`,
`t55`,
`t56`,
`t57`,
`t58`,
`t59`,
`t60`,
`t61`,
`t62`,
`t63`,
`t64`,
`t65`,
`t66`,
`t67`,
`t68`,
`t69`,
`t70`,
`t71`,
`t72`,
`t73`,
`t74`,
`t75`,
`t76`,
`t77`,
`t78`,
`t79`,
`t80`,
`t81`,
`t82`,
`t83`,
`t84`,
`t85`,
`t86`,
`t87`,
`t88`,
`t89`,
`t90`,
`t91`,
`t92`,
`t93`,
`t94`,
`t95`,
`t96`,
`t97`,
`t98`,
`t99`,
`t100`,
`t101`,
`t102`,
`t103`,
`t104`,
`t105`,
`t106`,
`t107`,
`t108`,
`t109`,
`t110`,
`t111`,
`t112`,
`t113`,
`t114`,
`t115`,
`t116`,
`t117`,
`t118`,
`t119`,
`t120`,
`t121`,
`t122`,
`t123`,
`t124`,
`t125`,
`t126`,
`t127`,
`t128`,
`t129`,
`t130`,
`t131`,
`t132`,
`t133`,
`t134`,
`t135`,
`t136`,
`t137`,
`t138`,
`t139`,
`t140`,
`t141`,
`t142`,
`t143`,
`t144`,
`t145`,
`t146`,
`t147`,
`t148`,
`t149`,
`t150`,
`t151`,
`t152`,
`t153`,
`t154`,
`t155`,
`t156`,
`t157`,
`t158`,
`t159`,
`t160`,
`t161`,
`t162`,
`t163`,
`t164`,
`t165`,
`t166`,
`t167`,
`t168`,
`t169`,
`t170`,
`t171`,
`t172`,
`t173`,
`t174`,
`t175`,
`t176`,
`t177`,
`t178`,
`t179`,
`t180`,
`t181`,
`t182`,
`t183`,
`t184`,
`t185`,
`t186`,
`t187`,
`t188`,
`t189`,
`t190`,
`t191`,
`t192`,
`t193`,
`t194`,
`t195`,
`t196`,
`t197`,
`t198`,
`t199`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`t200`
) VALUES (
NULL,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['fuerza'] . "' ,
'" . $_REQUEST['t1'] . "' ,
'" . $_REQUEST['t2'] . "' ,
'" . $_REQUEST['t3'] . "' ,
'" . $_REQUEST['t4'] . "' ,
'" . $_REQUEST['t5'] . "' ,
'" . $_REQUEST['t6'] . "' ,
'" . $_REQUEST['t7'] . "' ,
'" . $_REQUEST['t8'] . "' ,
'" . $_REQUEST['t9'] . "' ,
'" . $_REQUEST['t10'] . "' ,
'" . $_REQUEST['t11'] . "' ,
'" . $_REQUEST['t12'] . "' ,
'" . $_REQUEST['t13'] . "' ,
'" . $_REQUEST['t14'] . "' ,
'" . $_REQUEST['t15'] . "' ,
'" . $_REQUEST['t16'] . "' ,
'" . $_REQUEST['t17'] . "' ,
'" . $_REQUEST['t18'] . "' ,
'" . $_REQUEST['t19'] . "' ,
'" . $_REQUEST['t20'] . "' ,
'" . $_REQUEST['t21'] . "' ,
'" . $_REQUEST['t22'] . "' ,
'" . $_REQUEST['t23'] . "' ,
'" . $_REQUEST['t24'] . "' ,
'" . $_REQUEST['t25'] . "' ,
'" . $_REQUEST['t26'] . "' ,
'" . $_REQUEST['t27'] . "' ,
'" . $_REQUEST['t28'] . "' ,
'" . $_REQUEST['t29'] . "' ,
'" . $_REQUEST['t50'] . "' ,
'" . $_REQUEST['t30'] . "' ,
'" . $_REQUEST['t31'] . "' ,
'" . $_REQUEST['t32'] . "' ,
'" . $_REQUEST['t33'] . "' ,
'" . $_REQUEST['t34'] . "' ,
'" . $_REQUEST['t35'] . "' ,
'" . $_REQUEST['t36'] . "' ,
'" . $_REQUEST['t37'] . "' ,
'" . $_REQUEST['t38'] . "' ,
'" . $_REQUEST['t39'] . "' ,
'" . $_REQUEST['t40'] . "' ,
'" . $_REQUEST['t41'] . "' ,
'" . $_REQUEST['t42'] . "' ,
'" . $_REQUEST['t43'] . "' ,
'" . $_REQUEST['t44'] . "' ,
'" . $_REQUEST['t45'] . "' ,
'" . $_REQUEST['t46'] . "' ,
'" . $_REQUEST['t47'] . "' ,
'" . $_REQUEST['t48'] . "' ,
'" . $_REQUEST['t49'] . "' ,
'" . $_REQUEST['t51'] . "' ,
'" . $_REQUEST['t52'] . "' ,
'" . $_REQUEST['t53'] . "' ,
'" . $_REQUEST['t54'] . "' ,
'" . $_REQUEST['t55'] . "' ,
'" . $_REQUEST['t56'] . "' ,
'" . $_REQUEST['t57'] . "' ,
'" . $_REQUEST['t58'] . "' ,
'" . $_REQUEST['t59'] . "' ,
'" . $_REQUEST['t60'] . "' ,
'" . $_REQUEST['t61'] . "' ,
'" . $_REQUEST['t62'] . "' ,
'" . $_REQUEST['t63'] . "' ,
'" . $_REQUEST['t64'] . "' ,
'" . $_REQUEST['t65'] . "' ,
'" . $_REQUEST['t66'] . "' ,
'" . $_REQUEST['t67'] . "' ,
'" . $_REQUEST['t68'] . "' ,
'" . $_REQUEST['t69'] . "' ,
'" . $_REQUEST['t70'] . "' ,
'" . $_REQUEST['t71'] . "' ,
'" . $_REQUEST['t72'] . "' ,
'" . $_REQUEST['t73'] . "' ,
'" . $_REQUEST['t74'] . "' ,
'" . $_REQUEST['t75'] . "' ,
'" . $_REQUEST['t76'] . "' ,
'" . $_REQUEST['t77'] . "' ,
'" . $_REQUEST['t78'] . "' ,
'" . $_REQUEST['t79'] . "' ,
'" . $_REQUEST['t80'] . "' ,
'" . $_REQUEST['t81'] . "' ,
'" . $_REQUEST['t82'] . "' ,
'" . $_REQUEST['t83'] . "' ,
'" . $_REQUEST['t84'] . "' ,
'" . $_REQUEST['t85'] . "' ,
'" . $_REQUEST['t86'] . "' ,
'" . $_REQUEST['t87'] . "' ,
'" . $_REQUEST['t88'] . "' ,
'" . $_REQUEST['t89'] . "' ,
'" . $_REQUEST['t90'] . "' ,
'" . $_REQUEST['t91'] . "' ,
'" . $_REQUEST['t92'] . "' ,
'" . $_REQUEST['t93'] . "' ,
'" . $_REQUEST['t94'] . "' ,
'" . $_REQUEST['t95'] . "' ,
'" . $_REQUEST['t96'] . "' ,
'" . $_REQUEST['t97'] . "' ,
'" . $_REQUEST['t98'] . "' ,
'" . $_REQUEST['t99'] . "' ,
'" . $_REQUEST['t100'] . "' ,
'" . $_REQUEST['t101'] . "' ,
'" . $_REQUEST['t102'] . "' ,
'" . $_REQUEST['t103'] . "' ,
'" . $_REQUEST['t104'] . "' ,
'" . $_REQUEST['t105'] . "' ,
'" . $_REQUEST['t106'] . "' ,
'" . $_REQUEST['t107'] . "' ,
'" . $_REQUEST['t108'] . "' ,
'" . $_REQUEST['t109'] . "' ,
'" . $_REQUEST['t110'] . "' ,
'" . $_REQUEST['t111'] . "' ,
'" . $_REQUEST['t112'] . "' ,
'" . $_REQUEST['t113'] . "' ,
'" . $_REQUEST['t114'] . "' ,
'" . $_REQUEST['t115'] . "' ,
'" . $_REQUEST['t116'] . "' ,
'" . $_REQUEST['t117'] . "' ,
'" . $_REQUEST['t118'] . "' ,
'" . $_REQUEST['t119'] . "' ,
'" . $_REQUEST['t120'] . "' ,
'" . $_REQUEST['t121'] . "' ,
'" . $_REQUEST['t122'] . "' ,
'" . $_REQUEST['t123'] . "' ,
'" . $_REQUEST['t124'] . "' ,
'" . $_REQUEST['t125'] . "' ,
'" . $_REQUEST['t126'] . "' ,
'" . $_REQUEST['t127'] . "' ,
'" . $_REQUEST['t128'] . "' ,
'" . $_REQUEST['t129'] . "' ,
'" . $_REQUEST['t130'] . "' ,
'" . $_REQUEST['t131'] . "' ,
'" . $_REQUEST['t132'] . "' ,
'" . $_REQUEST['t133'] . "' ,
'" . $_REQUEST['t134'] . "' ,
'" . $_REQUEST['t135'] . "' ,
'" . $_REQUEST['t136'] . "' ,
'" . $_REQUEST['t137'] . "' ,
'" . $_REQUEST['t138'] . "' ,
'" . $_REQUEST['t139'] . "' ,
'" . $_REQUEST['t140'] . "' ,
'" . $_REQUEST['t141'] . "' ,
'" . $_REQUEST['t142'] . "' ,
'" . $_REQUEST['t143'] . "' ,
'" . $_REQUEST['t144'] . "' ,
'" . $_REQUEST['t145'] . "' ,
'" . $_REQUEST['t146'] . "' ,
'" . $_REQUEST['t147'] . "' ,
'" . $_REQUEST['t148'] . "' ,
'" . $_REQUEST['t149'] . "' ,
'" . $_REQUEST['t150'] . "' ,
'" . $_REQUEST['t151'] . "' ,
'" . $_REQUEST['t152'] . "' ,
'" . $_REQUEST['t153'] . "' ,
'" . $_REQUEST['t154'] . "' ,
'" . $_REQUEST['t155'] . "' ,
'" . $_REQUEST['t156'] . "' ,
'" . $_REQUEST['t157'] . "' ,
'" . $_REQUEST['t158'] . "' ,
'" . $_REQUEST['t159'] . "' ,
'" . $_REQUEST['t160'] . "' ,
'" . $_REQUEST['t161'] . "' ,
'" . $_REQUEST['t162'] . "' ,
'" . $_REQUEST['t163'] . "' ,
'" . $_REQUEST['t164'] . "' ,
'" . $_REQUEST['t165'] . "' ,
'" . $_REQUEST['t166'] . "' ,
'" . $_REQUEST['t167'] . "' ,
'" . $_REQUEST['t168'] . "' ,
'" . $_REQUEST['t169'] . "' ,
'" . $_REQUEST['t170'] . "' ,
'" . $_REQUEST['t171'] . "' ,
'" . $_REQUEST['t172'] . "' ,
'" . $_REQUEST['t173'] . "' ,
'" . $_REQUEST['t174'] . "' ,
'" . $_REQUEST['t175'] . "' ,
'" . $_REQUEST['t176'] . "' ,
'" . $_REQUEST['t177'] . "' ,
'" . $_REQUEST['t178'] . "' ,
'" . $_REQUEST['t179'] . "' ,
'" . $_REQUEST['t180'] . "' ,
'" . $_REQUEST['t181'] . "' ,
'" . $_REQUEST['t182'] . "' ,
'" . $_REQUEST['t183'] . "' ,
'" . $_REQUEST['t184'] . "' ,
'" . $_REQUEST['t185'] . "' ,
'" . $_REQUEST['t186'] . "' ,
'" . $_REQUEST['t187'] . "' ,
'" . $_REQUEST['t188'] . "' ,
'" . $_REQUEST['t189'] . "' ,
'" . $_REQUEST['t190'] . "' ,
'" . $_REQUEST['t191'] . "' ,
'" . $_REQUEST['t192'] . "' ,
'" . $_REQUEST['t193'] . "' ,
'" . $_REQUEST['t194'] . "' ,
'" . $_REQUEST['t195'] . "' ,
'" . $_REQUEST['t196'] . "' ,
'" . $_REQUEST['t197'] . "' ,
'" . $_REQUEST['t198'] . "' ,
'" . $_REQUEST['t199'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['t200'] . "' 
) ";
    } else if ($_REQUEST['id_funcionalidad_adulto'] != '') {

        $sql = "UPDATE funcionalidad_adulto set 
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`fuerza` = '" . $_REQUEST['fuerza'] . "' ,
`t1` = '" . $_REQUEST['t1'] . "' ,
`t2` = '" . $_REQUEST['t2'] . "' ,
`t3` = '" . $_REQUEST['t3'] . "' ,
`t4` = '" . $_REQUEST['t4'] . "' ,
`t5` = '" . $_REQUEST['t5'] . "' ,
`t6` = '" . $_REQUEST['t6'] . "' ,
`t7` = '" . $_REQUEST['t7'] . "' ,
`t8` = '" . $_REQUEST['t8'] . "' ,
`t9` = '" . $_REQUEST['t9'] . "' ,
`t10` = '" . $_REQUEST['t10'] . "' ,
`t11` = '" . $_REQUEST['t11'] . "' ,
`t12` = '" . $_REQUEST['t12'] . "' ,
`t13` = '" . $_REQUEST['t13'] . "' ,
`t14` = '" . $_REQUEST['t14'] . "' ,
`t15` = '" . $_REQUEST['t15'] . "' ,
`t16` = '" . $_REQUEST['t16'] . "' ,
`t17` = '" . $_REQUEST['t17'] . "' ,
`t18` = '" . $_REQUEST['t18'] . "' ,
`t19` = '" . $_REQUEST['t19'] . "' ,
`t20` = '" . $_REQUEST['t20'] . "' ,
`t21` = '" . $_REQUEST['t21'] . "' ,
`t22` = '" . $_REQUEST['t22'] . "' ,
`t23` = '" . $_REQUEST['t23'] . "' ,
`t24` = '" . $_REQUEST['t24'] . "' ,
`t25` = '" . $_REQUEST['t25'] . "' ,
`t26` = '" . $_REQUEST['t26'] . "' ,
`t27` = '" . $_REQUEST['t27'] . "' ,
`t28` = '" . $_REQUEST['t28'] . "' ,
`t29` = '" . $_REQUEST['t29'] . "' ,
`t50` = '" . $_REQUEST['t50'] . "' ,
`t30` = '" . $_REQUEST['t30'] . "' ,
`t31` = '" . $_REQUEST['t31'] . "' ,
`t32` = '" . $_REQUEST['t32'] . "' ,
`t33` = '" . $_REQUEST['t33'] . "' ,
`t34` = '" . $_REQUEST['t34'] . "' ,
`t35` = '" . $_REQUEST['t35'] . "' ,
`t36` = '" . $_REQUEST['t36'] . "' ,
`t37` = '" . $_REQUEST['t37'] . "' ,
`t38` = '" . $_REQUEST['t38'] . "' ,
`t39` = '" . $_REQUEST['t39'] . "' ,
`t40` = '" . $_REQUEST['t40'] . "' ,
`t41` = '" . $_REQUEST['t41'] . "' ,
`t42` = '" . $_REQUEST['t42'] . "' ,
`t43` = '" . $_REQUEST['t43'] . "' ,
`t44` = '" . $_REQUEST['t44'] . "' ,
`t45` = '" . $_REQUEST['t45'] . "' ,
`t46` = '" . $_REQUEST['t46'] . "' ,
`t47` = '" . $_REQUEST['t47'] . "' ,
`t48` = '" . $_REQUEST['t48'] . "' ,
`t49` = '" . $_REQUEST['t49'] . "' ,
`t51` = '" . $_REQUEST['t51'] . "' ,
`t52` = '" . $_REQUEST['t52'] . "' ,
`t53` = '" . $_REQUEST['t53'] . "' ,
`t54` = '" . $_REQUEST['t54'] . "' ,
`t55` = '" . $_REQUEST['t55'] . "' ,
`t56` = '" . $_REQUEST['t56'] . "' ,
`t57` = '" . $_REQUEST['t57'] . "' ,
`t58` = '" . $_REQUEST['t58'] . "' ,
`t59` = '" . $_REQUEST['t59'] . "' ,
`t60` = '" . $_REQUEST['t60'] . "' ,
`t61` = '" . $_REQUEST['t61'] . "' ,
`t62` = '" . $_REQUEST['t62'] . "' ,
`t63` = '" . $_REQUEST['t63'] . "' ,
`t64` = '" . $_REQUEST['t64'] . "' ,
`t65` = '" . $_REQUEST['t65'] . "' ,
`t66` = '" . $_REQUEST['t66'] . "' ,
`t67` = '" . $_REQUEST['t67'] . "' ,
`t68` = '" . $_REQUEST['t68'] . "' ,
`t69` = '" . $_REQUEST['t69'] . "' ,
`t70` = '" . $_REQUEST['t70'] . "' ,
`t71` = '" . $_REQUEST['t71'] . "' ,
`t72` = '" . $_REQUEST['t72'] . "' ,
`t73` = '" . $_REQUEST['t73'] . "' ,
`t74` = '" . $_REQUEST['t74'] . "' ,
`t75` = '" . $_REQUEST['t75'] . "' ,
`t76` = '" . $_REQUEST['t76'] . "' ,
`t77` = '" . $_REQUEST['t77'] . "' ,
`t78` = '" . $_REQUEST['t78'] . "' ,
`t79` = '" . $_REQUEST['t79'] . "' ,
`t80` = '" . $_REQUEST['t80'] . "' ,
`t81` = '" . $_REQUEST['t81'] . "' ,
`t82` = '" . $_REQUEST['t82'] . "' ,
`t83` = '" . $_REQUEST['t83'] . "' ,
`t84` = '" . $_REQUEST['t84'] . "' ,
`t85` = '" . $_REQUEST['t85'] . "' ,
`t86` = '" . $_REQUEST['t86'] . "' ,
`t87` = '" . $_REQUEST['t87'] . "' ,
`t88` = '" . $_REQUEST['t88'] . "' ,
`t89` = '" . $_REQUEST['t89'] . "' ,
`t90` = '" . $_REQUEST['t90'] . "' ,
`t91` = '" . $_REQUEST['t91'] . "' ,
`t92` = '" . $_REQUEST['t92'] . "' ,
`t93` = '" . $_REQUEST['t93'] . "' ,
`t94` = '" . $_REQUEST['t94'] . "' ,
`t95` = '" . $_REQUEST['t95'] . "' ,
`t96` = '" . $_REQUEST['t96'] . "' ,
`t97` = '" . $_REQUEST['t97'] . "' ,
`t98` = '" . $_REQUEST['t98'] . "' ,
`t99` = '" . $_REQUEST['t99'] . "' ,
`t100` = '" . $_REQUEST['t100'] . "' ,
`t101` = '" . $_REQUEST['t101'] . "' ,
`t102` = '" . $_REQUEST['t102'] . "' ,
`t103` = '" . $_REQUEST['t103'] . "' ,
`t104` = '" . $_REQUEST['t104'] . "' ,
`t105` = '" . $_REQUEST['t105'] . "' ,
`t106` = '" . $_REQUEST['t106'] . "' ,
`t107` = '" . $_REQUEST['t107'] . "' ,
`t108` = '" . $_REQUEST['t108'] . "' ,
`t109` = '" . $_REQUEST['t109'] . "' ,
`t110` = '" . $_REQUEST['t110'] . "' ,
`t111` = '" . $_REQUEST['t111'] . "' ,
`t112` = '" . $_REQUEST['t112'] . "' ,
`t113` = '" . $_REQUEST['t113'] . "' ,
`t114` = '" . $_REQUEST['t114'] . "' ,
`t115` = '" . $_REQUEST['t115'] . "' ,
`t116` = '" . $_REQUEST['t116'] . "' ,
`t117` = '" . $_REQUEST['t117'] . "' ,
`t118` = '" . $_REQUEST['t118'] . "' ,
`t119` = '" . $_REQUEST['t119'] . "' ,
`t120` = '" . $_REQUEST['t120'] . "' ,
`t121` = '" . $_REQUEST['t121'] . "' ,
`t122` = '" . $_REQUEST['t122'] . "' ,
`t123` = '" . $_REQUEST['t123'] . "' ,
`t124` = '" . $_REQUEST['t124'] . "' ,
`t125` = '" . $_REQUEST['t125'] . "' ,
`t126` = '" . $_REQUEST['t126'] . "' ,
`t127` = '" . $_REQUEST['t127'] . "' ,
`t128` = '" . $_REQUEST['t128'] . "' ,
`t129` = '" . $_REQUEST['t129'] . "' ,
`t130` = '" . $_REQUEST['t130'] . "' ,
`t131` = '" . $_REQUEST['t131'] . "' ,
`t132` = '" . $_REQUEST['t132'] . "' ,
`t133` = '" . $_REQUEST['t133'] . "' ,
`t134` = '" . $_REQUEST['t134'] . "' ,
`t135` = '" . $_REQUEST['t135'] . "' ,
`t136` = '" . $_REQUEST['t136'] . "' ,
`t137` = '" . $_REQUEST['t137'] . "' ,
`t138` = '" . $_REQUEST['t138'] . "' ,
`t139` = '" . $_REQUEST['t139'] . "' ,
`t140` = '" . $_REQUEST['t140'] . "' ,
`t141` = '" . $_REQUEST['t141'] . "' ,
`t142` = '" . $_REQUEST['t142'] . "' ,
`t143` = '" . $_REQUEST['t143'] . "' ,
`t144` = '" . $_REQUEST['t144'] . "' ,
`t145` = '" . $_REQUEST['t145'] . "' ,
`t146` = '" . $_REQUEST['t146'] . "' ,
`t147` = '" . $_REQUEST['t147'] . "' ,
`t148` = '" . $_REQUEST['t148'] . "' ,
`t149` = '" . $_REQUEST['t149'] . "' ,
`t150` = '" . $_REQUEST['t150'] . "' ,
`t151` = '" . $_REQUEST['t151'] . "' ,
`t152` = '" . $_REQUEST['t152'] . "' ,
`t153` = '" . $_REQUEST['t153'] . "' ,
`t154` = '" . $_REQUEST['t154'] . "' ,
`t155` = '" . $_REQUEST['t155'] . "' ,
`t156` = '" . $_REQUEST['t156'] . "' ,
`t157` = '" . $_REQUEST['t157'] . "' ,
`t158` = '" . $_REQUEST['t158'] . "' ,
`t159` = '" . $_REQUEST['t159'] . "' ,
`t160` = '" . $_REQUEST['t160'] . "' ,
`t161` = '" . $_REQUEST['t161'] . "' ,
`t162` = '" . $_REQUEST['t162'] . "' ,
`t163` = '" . $_REQUEST['t163'] . "' ,
`t164` = '" . $_REQUEST['t164'] . "' ,
`t165` = '" . $_REQUEST['t165'] . "' ,
`t166` = '" . $_REQUEST['t166'] . "' ,
`t167` = '" . $_REQUEST['t167'] . "' ,
`t168` = '" . $_REQUEST['t168'] . "' ,
`t169` = '" . $_REQUEST['t169'] . "' ,
`t170` = '" . $_REQUEST['t170'] . "' ,
`t171` = '" . $_REQUEST['t171'] . "' ,
`t172` = '" . $_REQUEST['t172'] . "' ,
`t173` = '" . $_REQUEST['t173'] . "' ,
`t174` = '" . $_REQUEST['t174'] . "' ,
`t175` = '" . $_REQUEST['t175'] . "' ,
`t176` = '" . $_REQUEST['t176'] . "' ,
`t177` = '" . $_REQUEST['t177'] . "' ,
`t178` = '" . $_REQUEST['t178'] . "' ,
`t179` = '" . $_REQUEST['t179'] . "' ,
`t180` = '" . $_REQUEST['t180'] . "' ,
`t181` = '" . $_REQUEST['t181'] . "' ,
`t182` = '" . $_REQUEST['t182'] . "' ,
`t183` = '" . $_REQUEST['t183'] . "' ,
`t184` = '" . $_REQUEST['t184'] . "' ,
`t185` = '" . $_REQUEST['t185'] . "' ,
`t186` = '" . $_REQUEST['t186'] . "' ,
`t187` = '" . $_REQUEST['t187'] . "' ,
`t188` = '" . $_REQUEST['t188'] . "' ,
`t189` = '" . $_REQUEST['t189'] . "' ,
`t190` = '" . $_REQUEST['t190'] . "' ,
`t191` = '" . $_REQUEST['t191'] . "' ,
`t192` = '" . $_REQUEST['t192'] . "' ,
`t193` = '" . $_REQUEST['t193'] . "' ,
`t194` = '" . $_REQUEST['t194'] . "' ,
`t195` = '" . $_REQUEST['t195'] . "' ,
`t196` = '" . $_REQUEST['t196'] . "' ,
`t197` = '" . $_REQUEST['t197'] . "' ,
`t198` = '" . $_REQUEST['t198'] . "' ,
`t199` = '" . $_REQUEST['t199'] . "' ,
`t200` = '" . $_REQUEST['t200'] . "' WHERE `id_funcionalidad_adulto` = '" . $_REQUEST['id_funcionalidad_adulto'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_funcionalidad_adulto = 'new';
$sql = "SELECT * from funcionalidad_adulto WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_funcionalidad_adulto = $row['id_funcionalidad_adulto'];

    $fuerza = $row['fuerza'];
    $t1 = $row['t1'];
    $t2 = $row['t2'];
    $t3 = $row['t3'];
    $t4 = $row['t4'];
    $t5 = $row['t5'];
    $t6 = $row['t6'];
    $t7 = $row['t7'];
    $t8 = $row['t8'];
    $t9 = $row['t9'];
    $t10 = $row['t10'];
    $t11 = $row['t11'];
    $t12 = $row['t12'];
    $t13 = $row['t13'];
    $t14 = $row['t14'];
    $t15 = $row['t15'];
    $t16 = $row['t16'];
    $t17 = $row['t17'];
    $t18 = $row['t18'];
    $t19 = $row['t19'];
    $t20 = $row['t20'];
    $t21 = $row['t21'];
    $t22 = $row['t22'];
    $t23 = $row['t23'];
    $t24 = $row['t24'];
    $t25 = $row['t25'];
    $t26 = $row['t26'];
    $t27 = $row['t27'];
    $t28 = $row['t28'];
    $t29 = $row['t29'];
    $t50 = $row['t50'];
    $t30 = $row['t30'];
    $t31 = $row['t31'];
    $t32 = $row['t32'];
    $t33 = $row['t33'];
    $t34 = $row['t34'];
    $t35 = $row['t35'];
    $t36 = $row['t36'];
    $t37 = $row['t37'];
    $t38 = $row['t38'];
    $t39 = $row['t39'];
    $t40 = $row['t40'];
    $t41 = $row['t41'];
    $t42 = $row['t42'];
    $t43 = $row['t43'];
    $t44 = $row['t44'];
    $t45 = $row['t45'];
    $t46 = $row['t46'];
    $t47 = $row['t47'];
    $t48 = $row['t48'];
    $t49 = $row['t49'];
    $t51 = $row['t51'];
    $t52 = $row['t52'];
    $t53 = $row['t53'];
    $t54 = $row['t54'];
    $t55 = $row['t55'];
    $t56 = $row['t56'];
    $t57 = $row['t57'];
    $t58 = $row['t58'];
    $t59 = $row['t59'];
    $t60 = $row['t60'];
    $t61 = $row['t61'];
    $t62 = $row['t62'];
    $t63 = $row['t63'];
    $t64 = $row['t64'];
    $t65 = $row['t65'];
    $t66 = $row['t66'];
    $t67 = $row['t67'];
    $t68 = $row['t68'];
    $t69 = $row['t69'];
    $t70 = $row['t70'];
    $t71 = $row['t71'];
    $t72 = $row['t72'];
    $t73 = $row['t73'];
    $t74 = $row['t74'];
    $t75 = $row['t75'];
    $t76 = $row['t76'];
    $t77 = $row['t77'];
    $t78 = $row['t78'];
    $t79 = $row['t79'];
    $t80 = $row['t80'];
    $t81 = $row['t81'];
    $t82 = $row['t82'];
    $t83 = $row['t83'];
    $t84 = $row['t84'];
    $t85 = $row['t85'];
    $t86 = $row['t86'];
    $t87 = $row['t87'];
    $t88 = $row['t88'];
    $t89 = $row['t89'];
    $t90 = $row['t90'];
    $t91 = $row['t91'];
    $t92 = $row['t92'];
    $t93 = $row['t93'];
    $t94 = $row['t94'];
    $t95 = $row['t95'];
    $t96 = $row['t96'];
    $t97 = $row['t97'];
    $t98 = $row['t98'];
    $t99 = $row['t99'];
    $t100 = $row['t100'];
    $t101 = $row['t101'];
    $t102 = $row['t102'];
    $t103 = $row['t103'];
    $t104 = $row['t104'];
    $t105 = $row['t105'];
    $t106 = $row['t106'];
    $t107 = $row['t107'];
    $t108 = $row['t108'];
    $t109 = $row['t109'];
    $t110 = $row['t110'];
    $t111 = $row['t111'];
    $t112 = $row['t112'];
    $t113 = $row['t113'];
    $t114 = $row['t114'];
    $t115 = $row['t115'];
    $t116 = $row['t116'];
    $t117 = $row['t117'];
    $t118 = $row['t118'];
    $t119 = $row['t119'];
    $t120 = $row['t120'];
    $t121 = $row['t121'];
    $t122 = $row['t122'];
    $t123 = $row['t123'];
    $t124 = $row['t124'];
    $t125 = $row['t125'];
    $t126 = $row['t126'];
    $t127 = $row['t127'];
    $t128 = $row['t128'];
    $t129 = $row['t129'];
    $t130 = $row['t130'];
    $t131 = $row['t131'];
    $t132 = $row['t132'];
    $t133 = $row['t133'];
    $t134 = $row['t134'];
    $t135 = $row['t135'];
    $t136 = $row['t136'];
    $t137 = $row['t137'];
    $t138 = $row['t138'];
    $t139 = $row['t139'];
    $t140 = $row['t140'];
    $t141 = $row['t141'];
    $t142 = $row['t142'];
    $t143 = $row['t143'];
    $t144 = $row['t144'];
    $t145 = $row['t145'];
    $t146 = $row['t146'];
    $t147 = $row['t147'];
    $t148 = $row['t148'];
    $t149 = $row['t149'];
    $t150 = $row['t150'];
    $t151 = $row['t151'];
    $t152 = $row['t152'];
    $t153 = $row['t153'];
    $t154 = $row['t154'];
    $t155 = $row['t155'];
    $t156 = $row['t156'];
    $t157 = $row['t157'];
    $t158 = $row['t158'];
    $t159 = $row['t159'];
    $t160 = $row['t160'];
    $t161 = $row['t161'];
    $t162 = $row['t162'];
    $t163 = $row['t163'];
    $t164 = $row['t164'];
    $t165 = $row['t165'];
    $t166 = $row['t166'];
    $t167 = $row['t167'];
    $t168 = $row['t168'];
    $t169 = $row['t169'];
    $t170 = $row['t170'];
    $t171 = $row['t171'];
    $t172 = $row['t172'];
    $t173 = $row['t173'];
    $t174 = $row['t174'];
    $t175 = $row['t175'];
    $t176 = $row['t176'];
    $t177 = $row['t177'];
    $t178 = $row['t178'];
    $t179 = $row['t179'];
    $t180 = $row['t180'];
    $t181 = $row['t181'];
    $t182 = $row['t182'];
    $t183 = $row['t183'];
    $t184 = $row['t184'];
    $t185 = $row['t185'];
    $t186 = $row['t186'];
    $t187 = $row['t187'];
    $t188 = $row['t188'];
    $t189 = $row['t189'];
    $t190 = $row['t190'];
    $t191 = $row['t191'];
    $t192 = $row['t192'];
    $t193 = $row['t193'];
    $t194 = $row['t194'];
    $t195 = $row['t195'];
    $t196 = $row['t196'];
    $t197 = $row['t197'];
    $t198 = $row['t198'];
    $t199 = $row['t199'];
    $t200 = $row['t200'];
    break;
}
?>
<script>

    $(function() {

        $("#close-funcionalidad_adulto").click(function() {
            $("#open-funcionalidad_adulto").show();
            $(this).hide();
            $("#content-funcionalidad_adulto").hide('slow');
        });

        $("#open-funcionalidad_adulto").click(function() {
            $("#close-funcionalidad_adulto").show();
            $(this).hide();
            $("#content-funcionalidad_adulto").show('slow');
        });

    });

</script>
<fieldset id="funcionalidad_adulto">
    <legend align="left"> <div class="arrow-c" id="close-funcionalidad_adulto"></div> <div class="arrow-o" id="open-funcionalidad_adulto" ></div> <font>Valoracion terapia ocupacional neurorehabilitacion -  Funcionalidad</font></legend>
    <div id="content-funcionalidad_adulto">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_funcionalidad_adulto" id="guardar_funcionalidad_adulto" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_funcionalidad_adulto" name="form_funcionalidad_adulto" action="<?php echo @$action_form_funcionalidad_adulto ?>#funcionalidad_adulto" method="post">

            <input type="hidden" id="id_funcionalidad_adulto" name="id_funcionalidad_adulto" value="<?php echo @$id_funcionalidad_adulto ?>" />
            
            <p><strong>Fuerza muscular</strong></p>
            <textarea cols="100" rows="3" id="fuerza" name="fuerza" ><?php echo @$fuerza; ?></textarea>

            <br>
            <p><strong>Examen de movilidad articular</strong></p>
            <table border="0" class='data text_small' cellspacing="0" cellpadding="0" width="642">

                <tbody><tr>
                        <td width="36" valign="top"><br>
                            <strong>N</strong></td>
                        <td width="36" valign="top"><p align="center"><strong>A</strong></p></td>
                        <td width="108" valign="top"><p align="center"><strong>CUELLO</strong></p></td>
                        <td width="72" valign="top"><p align="center"><strong>GRADOS</strong></p></td>
                        <td width="24" valign="top"><p align="center"><strong>N</strong></p></td>
                        <td width="32" valign="top"><p align="center"><strong>A</strong></p></td>
                        <td width="36" valign="top"><p align="center"><strong>N</strong></p></td>
                        <td width="33" valign="top"><p align="center"><strong>A</strong></p></td>
                        <td width="120" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
                        <td width="72" valign="top"><p align="center"><strong>GRADOS</strong></p></td>
                        <td width="36" valign="top"><p align="center"><strong>N</strong></p></td>
                        <td width="36" valign="top"><p align="center"><strong>A</strong></p></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t1" name="t1" value="<?php echo @$t1 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t2" name="t2" value="<?php echo @$t2 ?>"></td>
                        <td width="108" valign="top"><p align="center">Flexión</p></td>
                        <td width="72" valign="top"><p align="center">55</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t3" name="t3" value="<?php echo @$t3 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t4" name="t4" value="<?php echo @$t4 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t5" name="t5" value="<?php echo @$t5 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t6" name="t6" value="<?php echo @$t6 ?>"></td>
                        <td width="120" valign="top"><p align="center">Extensión IFD</p></td>
                        <td width="72" valign="top"><p align="center">110- 0</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t7" name="t7" value="<?php echo @$t7 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t8" name="t8" value="<?php echo @$t8 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t9" name="t9" value="<?php echo @$t9 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t10" name="t10" value="<?php echo @$t10 ?>"></td>
                        <td width="108" valign="top"><p align="center">Extensión</p></td>
                        <td width="72" valign="top"><p align="center">65</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t11" name="t11" value="<?php echo @$t11 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t12" name="t12" value="<?php echo @$t12 ?>"></td>
                        <td width="36" valign="top"></td>
                        <td width="33" valign="top"></td>
                        <td width="120" valign="top"><p align="center"><strong>PULGAR</strong></p></td>
                        <td width="72" valign="top"></td>
                        <td width="36" valign="top"></td>
                        <td width="36" valign="top"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t13" name="t13" value="<?php echo @$t13 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t14" name="t14" value="<?php echo @$t14 ?>"></td>
                        <td width="108" valign="top"><p align="center">Inclinación</p></td>
                        <td width="72" valign="top"><p align="center">55</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t15" name="t15" value="<?php echo @$t15 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t16" name="t16" value="<?php echo @$t16 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t17" name="t17" value="<?php echo @$t17 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t18" name="t18" value="<?php echo @$t18 ?>"></td>
                        <td width="120" valign="top"><p align="center">Flexión</p></td>
                        <td width="72" valign="top"><p align="center">50- 60</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t19" name="t19" value="<?php echo @$t19 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t20" name="t20" value="<?php echo @$t20 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t21" name="t21" value="<?php echo @$t21 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t22" name="t22" value="<?php echo @$t22 ?>"></td>
                        <td width="108" valign="top"><p align="center">Rotación</p></td>
                        <td width="72" valign="top"><p align="center">50</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t23" name="t23" value="<?php echo @$t23 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t24" name="t24" value="<?php echo @$t24 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t25" name="t25" value="<?php echo @$t25 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t26" name="t26" value="<?php echo @$t26 ?>"></td>
                        <td width="120" valign="top"><p align="center">Extensión</p></td>
                        <td width="72" valign="top"><p align="center">30</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t27" name="t27" value="<?php echo @$t27 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t28" name="t28" value="<?php echo @$t28 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t29" name="t29" value="<?php echo @$t29 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t30" name="t30" value="<?php echo @$t30 ?>"></td>
                        <td width="108" valign="top"><p align="center">Lateral</p></td>
                        <td width="72" valign="top"><p align="center">50</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t31" name="t31" value="<?php echo @$t31 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t32" name="t32" value="<?php echo @$t32 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t33" name="t33" value="<?php echo @$t33 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t34" name="t34" value="<?php echo @$t34 ?>"></td>
                        <td width="120" valign="top"><p align="center">Flexión&nbsp; IF</p></td>
                        <td width="72" valign="top"><p align="center">80</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t35" name="t35" value="<?php echo @$t35 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t36" name="t36" value="<?php echo @$t36 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"></td>
                        <td width="36" valign="top"></td>
                        <td width="108" valign="top"><p align="center"><strong>BRAZO</strong></p></td>
                        <td width="72" valign="top"></td>
                        <td width="24" valign="top"></td>
                        <td width="32" valign="top"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t37" name="t37" value="<?php echo @$t37 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t38" name="t38" value="<?php echo @$t38 ?>"></td>
                        <td width="120" valign="top"><p align="center">Extensión IF</p></td>
                        <td width="72" valign="top"><p align="center">30</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t39" name="t39" value="<?php echo @$t39 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t40" name="t40" value="<?php echo @$t40 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t41" name="t41" value="<?php echo @$t41 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t42" name="t42" value="<?php echo @$t42 ?>"></td>
                        <td width="108" valign="top"><p align="center">Flexión</p></td>
                        <td width="72" valign="top"><p align="center">0- 180</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t43" name="t43" value="<?php echo @$t43 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t44" name="t44" value="<?php echo @$t44 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t45" name="t45" value="<?php echo @$t45 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t46" name="t46" value="<?php echo @$t46 ?>"></td>
                        <td width="120" valign="top"><p align="center">Abducción</p></td>
                        <td width="72" valign="top"><p align="center">60-&nbsp; 90</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t47" name="t47" value="<?php echo @$t47 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t48" name="t48" value="<?php echo @$t48 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t49" name="t49" value="<?php echo @$t49 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t50" name="t50" value="<?php echo @$t50 ?>"></td>
                        <td width="108" valign="top"><p align="center">Exnsión</p></td>
                        <td width="72" valign="top"><p align="center">0- 60</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t51" name="t51" value="<?php echo @$t51 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t52" name="t52" value="<?php echo @$t52 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t53" name="t53" value="<?php echo @$t53 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t54" name="t54" value="<?php echo @$t54 ?>"></td>
                        <td width="120" valign="top"><p align="center">Adduccion</p></td>
                        <td width="72" valign="top"><p align="center">0</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t55" name="t55" value="<?php echo @$t55 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t56" name="t56" value="<?php echo @$t56 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t57" name="t57" value="<?php echo @$t57 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t58" name="t58" value="<?php echo @$t58 ?>"></td>
                        <td width="108" valign="top"><p align="center">Horizontal</p></td>
                        <td width="72" valign="top"><p align="center">0- 90</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t59" name="t59" value="<?php echo @$t59 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t60" name="t60" value="<?php echo @$t60 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t61" name="t61" value="<?php echo @$t61 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t62" name="t62" value="<?php echo @$t62 ?>"></td>
                        <td width="120" valign="top"><p align="center">Oposición</p></td>
                        <td width="72" valign="top"><input type="text" class="input_txt valid" id="t63" name="t63" value="<?php echo @$t63 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t64" name="t64" value="<?php echo @$t64 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t65" name="t65" value="<?php echo @$t65 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t66" name="t66" value="<?php echo @$t66 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t67" name="t67" value="<?php echo @$t67 ?>"></td>
                        <td width="108" valign="top"><p align="center">Add Vertical</p></td>
                        <td width="72" valign="top"><p align="center">0- 180</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t68" name="t68" value="<?php echo @$t68 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t69" name="t69" value="<?php echo @$t69 ?>"></td>
                        <td width="36" valign="top"></td>
                        <td width="33" valign="top"></td>
                        <td width="120" valign="top"><p align="center"><strong>TRONCO</strong></p></td>
                        <td width="72" valign="top"></td>
                        <td width="36" valign="top"></td>
                        <td width="36" valign="top"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t70" name="t70" value="<?php echo @$t70 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t71" name="t71" value="<?php echo @$t71 ?>"></td>
                        <td width="108" valign="top"><p align="center">Abducción</p></td>
                        <td width="72" valign="top"><p align="center">0- 45</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t72" name="t72" value="<?php echo @$t72 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t73" name="t73" value="<?php echo @$t73 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t74" name="t74" value="<?php echo @$t74 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t75" name="t75" value="<?php echo @$t75 ?>"></td>
                        <td width="120" valign="top"><p align="center">Flexión</p></td>
                        <td width="72" valign="top"><p align="center">20</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t76" name="t76" value="<?php echo @$t76 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t77" name="t77" value="<?php echo @$t77 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t78" name="t78" value="<?php echo @$t78 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t79" name="t79" value="<?php echo @$t79 ?>"></td>
                        <td width="108" valign="top"><p align="center">Rotación ext.</p></td>
                        <td width="72" valign="top"><p align="center">0- 90</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t80" name="t80" value="<?php echo @$t80 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t81" name="t81" value="<?php echo @$t81 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t82" name="t82" value="<?php echo @$t82 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t83" name="t83" value="<?php echo @$t83 ?>"></td>
                        <td width="120" valign="top"><p align="center">Extensión</p></td>
                        <td width="72" valign="top"><p align="center">35</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t84" name="t84" value="<?php echo @$t84 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t85" name="t85" value="<?php echo @$t85 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t86" name="t86" value="<?php echo @$t86 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t87" name="t87" value="<?php echo @$t87 ?>"></td>
                        <td width="108" valign="top"><p align="center">Rotación int.</p></td>
                        <td width="72" valign="top"><p align="center">0- 70</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t88" name="t88" value="<?php echo @$t88 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t89" name="t89" value="<?php echo @$t89 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t90" name="t90" value="<?php echo @$t90 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t91" name="t91" value="<?php echo @$t91 ?>"></td>
                        <td width="120" valign="top"><p align="center">Inclinación</p></td>
                        <td width="72" valign="top"><p align="center">20</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t92" name="t92" value="<?php echo @$t92 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t93" name="t93" value="<?php echo @$t93 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"></td>
                        <td width="36" valign="top"></td>
                        <td width="108" valign="top"><p align="center"><strong>ANTEBRAZO</strong></p></td>
                        <td width="72" valign="top"></td>
                        <td width="24" valign="top"></td>
                        <td width="32" valign="top"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t94" name="t94" value="<?php echo @$t94 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t95" name="t95" value="<?php echo @$t95 ?>"></td>
                        <td width="120" valign="top"><p align="center">Rotación</p></td>
                        <td width="72" valign="top"><p align="center">45</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t96" name="t96" value="<?php echo @$t96 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t97" name="t97" value="<?php echo @$t97 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t98" name="t98" value="<?php echo @$t98 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t99" name="t99" value="<?php echo @$t99 ?>"></td>
                        <td width="108" valign="top"><p align="center">Flexión</p></td>
                        <td width="72" valign="top"><p align="center">0- 135</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t100" name="t100" value="<?php echo @$t100 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t101" name="t101" value="<?php echo @$t101 ?>"></td>
                        <td width="36" valign="top"></td>
                        <td width="33" valign="top"></td>
                        <td width="120" valign="top"><p align="center"><strong>CADERA</strong></p></td>
                        <td width="72" valign="top"></td>
                        <td width="36" valign="top"></td>
                        <td width="36" valign="top"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t102" name="t102" value="<?php echo @$t102 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t103" name="t103" value="<?php echo @$t103 ?>"></td>
                        <td width="108" valign="top"><p align="center">Extensión</p></td>
                        <td width="72" valign="top"><p align="center">135- 0</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t104" name="t104" value="<?php echo @$t104 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t105" name="t105" value="<?php echo @$t105 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t106" name="t106" value="<?php echo @$t106 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t107" name="t107" value="<?php echo @$t107 ?>"></td>
                        <td width="120" valign="top"><p align="center">Flexión</p></td>
                        <td width="72" valign="top"><p align="center">95</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t108" name="t108" value="<?php echo @$t108 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t109" name="t109" value="<?php echo @$t109 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t110" name="t110" value="<?php echo @$t110 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t111" name="t111" value="<?php echo @$t111 ?>"></td>
                        <td width="108" valign="top"><p align="center">Pronacion</p></td>
                        <td width="72" valign="top"><p align="center">0- 90</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t112" name="t112" value="<?php echo @$t112 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t113" name="t113" value="<?php echo @$t113 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t114" name="t114" value="<?php echo @$t114 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t115" name="t115" value="<?php echo @$t115 ?>"></td>
                        <td width="120" valign="top"><p align="center">Extensión</p></td>
                        <td width="72" valign="top"><p align="center">95</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t116" name="t116" value="<?php echo @$t116 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t117" name="t117" value="<?php echo @$t117 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t118" name="t118" value="<?php echo @$t118 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t119" name="t119" value="<?php echo @$t119 ?>"></td>
                        <td width="108" valign="top"><p align="center">Supinación</p></td>
                        <td width="72" valign="top"><p align="center">0- 80</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t120" name="t120" value="<?php echo @$t120 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t121" name="t121" value="<?php echo @$t121 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t122" name="t122" value="<?php echo @$t122 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t123" name="t123" value="<?php echo @$t123 ?>"></td>
                        <td width="120" valign="top"><p align="center">Abducción</p></td>
                        <td width="72" valign="top"><p align="center">50</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t124" name="t124" value="<?php echo @$t124 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t125" name="t125" value="<?php echo @$t125 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"></td>
                        <td width="36" valign="top"></td>
                        <td width="108" valign="top"><p align="center"><strong>MUÑECA</strong></p></td>
                        <td width="72" valign="top"></td>
                        <td width="24" valign="top"></td>
                        <td width="32" valign="top"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t126" name="t126" value="<?php echo @$t126 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t127" name="t127" value="<?php echo @$t127 ?>"></td>
                        <td width="120" valign="top"><p align="center">Adduccion</p></td>
                        <td width="72" valign="top"><p align="center">12</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t128" name="t128" value="<?php echo @$t128 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t129" name="t129" value="<?php echo @$t129 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t130" name="t130" value="<?php echo @$t130 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t131" name="t131" value="<?php echo @$t131 ?>"></td>
                        <td width="108" valign="top"><p align="center">Extensión</p></td>
                        <td width="72" valign="top"><p align="center">0- 80</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t132" name="t132" value="<?php echo @$t132 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t133" name="t133" value="<?php echo @$t133 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t134" name="t134" value="<?php echo @$t134 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t135" name="t135" value="<?php echo @$t135 ?>"></td>
                        <td width="120" valign="top"><p align="center">Rotación int.</p></td>
                        <td width="72" valign="top"><p align="center">30- 35</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t136" name="t136" value="<?php echo @$t136 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t137" name="t137" value="<?php echo @$t137 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t138" name="t138" value="<?php echo @$t138 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t139" name="t139" value="<?php echo @$t139 ?>"></td>
                        <td width="108" valign="top"><p align="center">Flexión</p></td>
                        <td width="72" valign="top"><p align="center">0- 90</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t140" name="t140" value="<?php echo @$t140 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t141" name="t141" value="<?php echo @$t141 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t142" name="t142" value="<?php echo @$t142 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t143" name="t143" value="<?php echo @$t143 ?>"></td>
                        <td width="120" valign="top"><p align="center">Rotación e.</p></td>
                        <td width="72" valign="top"><p align="center">45</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t144" name="t144" value="<?php echo @$t144 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t145" name="t145" value="<?php echo @$t145 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t146" name="t146" value="<?php echo @$t146 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t147" name="t147" value="<?php echo @$t147 ?>"></td>
                        <td width="108" valign="top"><p align="center">Des. Radial</p></td>
                        <td width="72" valign="top"><p align="center">0- 15</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t148" name="t148" value="<?php echo @$t148 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t149" name="t149" value="<?php echo @$t149 ?>"></td>
                        <td width="36" valign="top"></td>
                        <td width="33" valign="top"></td>
                        <td width="120" valign="top"><p align="center"><strong>RODILLA</strong></p></td>
                        <td width="72" valign="top"></td>
                        <td width="36" valign="top"></td>
                        <td width="36" valign="top"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t150" name="t150" value="<?php echo @$t150 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t151" name="t151" value="<?php echo @$t151 ?>"></td>
                        <td width="108" valign="top"><p align="center">Des. Ulnar</p></td>
                        <td width="72" valign="top"><p align="center">0- 35</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t152" name="t152" value="<?php echo @$t152 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t153" name="t153" value="<?php echo @$t153 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t154" name="t154" value="<?php echo @$t154 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t155" name="t155" value="<?php echo @$t155 ?>"></td>
                        <td width="120" valign="top"><p align="center">Flexión</p></td>
                        <td width="72" valign="top"><p align="center">90</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t156" name="t156" value="<?php echo @$t156 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t157" name="t157" value="<?php echo @$t157 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"></td>
                        <td width="36" valign="top"></td>
                        <td width="108" valign="top"><p align="center"><strong>MANO</strong></p></td>
                        <td width="72" valign="top"></td>
                        <td width="24" valign="top"></td>
                        <td width="32" valign="top"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t158" name="t158" value="<?php echo @$t158 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t159" name="t159" value="<?php echo @$t159 ?>"></td>
                        <td width="120" valign="top"><p align="center">Extensión</p></td>
                        <td width="72" valign="top"><p align="center">0- 5</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t160" name="t160" value="<?php echo @$t160 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t161" name="t161" value="<?php echo @$t161 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t162" name="t162" value="<?php echo @$t162 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t163" name="t163" value="<?php echo @$t163 ?>"></td>
                        <td width="108" valign="top"><p align="center">Flexión MCF</p></td>
                        <td width="72" valign="top"><p align="center">0- 110</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t164" name="t164" value="<?php echo @$t164 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t165" name="t165" value="<?php echo @$t165 ?>"></td>
                        <td width="36" valign="top"></td>
                        <td width="33" valign="top"></td>
                        <td width="120" valign="top"><p align="center"><strong>TOBILLO</strong></p></td>
                        <td width="72" valign="top"></td>
                        <td width="36" valign="top"></td>
                        <td width="36" valign="top"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t166" name="t166" value="<?php echo @$t166 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t167" name="t167" value="<?php echo @$t167 ?>"></td>
                        <td width="108" valign="top"><p align="center">Extensión MCF</p></td>
                        <td width="72" valign="top"><p align="center">110- 0</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t168" name="t168" value="<?php echo @$t168 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t169" name="t169" value="<?php echo @$t169 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t170" name="t170" value="<?php echo @$t170 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t171" name="t171" value="<?php echo @$t171 ?>"></td>
                        <td width="120" valign="top"><p align="center">Dorsiflexion</p></td>
                        <td width="72" valign="top"><p align="center">12</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t172" name="t172" value="<?php echo @$t172 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t173" name="t173" value="<?php echo @$t173 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t174" name="t174" value="<?php echo @$t174 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t175" name="t175" value="<?php echo @$t175 ?>"></td>
                        <td width="108" valign="top"><p align="center">Flexión IFP</p></td>
                        <td width="72" valign="top"><p align="center">0- 110</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t176" name="t176" value="<?php echo @$t176 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t177" name="t177" value="<?php echo @$t177 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t178" name="t178" value="<?php echo @$t178 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t179" name="t179" value="<?php echo @$t179 ?>"></td>
                        <td width="120" valign="top"><p align="center">Plantiflexion</p></td>
                        <td width="72" valign="top"><p align="center">45- 55</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t180" name="t180" value="<?php echo @$t180 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t181" name="t181" value="<?php echo @$t181 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t182" name="t182" value="<?php echo @$t182 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t183" name="t183" value="<?php echo @$t183 ?>"></td>
                        <td width="108" valign="top"><p align="center">Extensión IFP</p></td>
                        <td width="72" valign="top"><p align="center">110- 0</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t184" name="t184" value="<?php echo @$t184 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t185" name="t185" value="<?php echo @$t185 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t186" name="t186" value="<?php echo @$t186 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t187" name="t187" value="<?php echo @$t187 ?>"></td>
                        <td width="120" valign="top"><p align="center">Eversion</p></td>
                        <td width="72" valign="top"><p align="center">15</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t188" name="t188" value="<?php echo @$t188 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t189" name="t189" value="<?php echo @$t189 ?>"></td>
                    </tr>
                    <tr>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t190" name="t190" value="<?php echo @$t190 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t191" name="t191" value="<?php echo @$t191 ?>"></td>
                        <td width="108" valign="top"><p align="center">Flexión IFD</p></td>
                        <td width="72" valign="top"><p align="center">0- 110</p></td>
                        <td width="24" valign="top"><input type="text" class="input_txt valid" id="t192" name="t192" value="<?php echo @$t192 ?>"></td>
                        <td width="32" valign="top"><input type="text" class="input_txt valid" id="t193" name="t193" value="<?php echo @$t193 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t194" name="t194" value="<?php echo @$t194 ?>"></td>
                        <td width="33" valign="top"><input type="text" class="input_txt valid" id="t195" name="t195" value="<?php echo @$t195 ?>"></td>
                        <td width="120" valign="top"><p align="center">Inversión</p></td>
                        <td width="72" valign="top"><p align="center">35</p></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t196" name="t196" value="<?php echo @$t196 ?>"></td>
                        <td width="36" valign="top"><input type="text" class="input_txt valid" id="t197" name="t197" value="<?php echo @$t197 ?>"></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <p><strong>Observaciones</strong></p>
            <textarea cols="100" rows="3" id="t198" name="t198" ><?php echo @$t198; ?></textarea>
            <br>
            
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>
