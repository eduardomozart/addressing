<?php
/*
 * @version $Id: HEADER 1 2009-09-21 14:58 Tsmr $
 -------------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2009 by the INDEPNET Development Team.

 http://indepnet.net/   http://glpi-project.org
 -------------------------------------------------------------------------

 LICENSE

 This file is part of GLPI.

 GLPI is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 GLPI is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with GLPI; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 --------------------------------------------------------------------------
 
// ----------------------------------------------------------------------
// Original Author of file: CAILLAUD Xavier & COLLET Remi
// Purpose of file: plugin addressing v1.8.0 - GLPI 0.80
// ----------------------------------------------------------------------
 */

$title="IP Adressing";

$LANG['plugin_addressing']['title'][1] = "".$title."";

$LANG['plugin_addressing'][1] = "No report found";
$LANG['plugin_addressing'][3] = "Link";
$LANG['plugin_addressing'][4] = "Generate";

$LANG['plugin_addressing']['reports'][1] = "Relatório de Range e IPs";
$LANG['plugin_addressing']['reports'][2] = "IP";
$LANG['plugin_addressing']['reports'][3] = "Selecione o Range de IP e a Rede: ";
$LANG['plugin_addressing']['reports'][5] = "Mac Address";
$LANG['plugin_addressing']['reports'][8] = "Tipo(s) de Item(s)";
$LANG['plugin_addressing']['reports'][9] = "Dispositivos Conectados";
$LANG['plugin_addressing']['reports'][13] = "Endereço Reservado";
$LANG['plugin_addressing']['reports'][14] = "Usuario";
$LANG['plugin_addressing']['reports'][15] = "Fila Vermelha";
$LANG['plugin_addressing']['reports'][16] = "Mesmo IP";
$LANG['plugin_addressing']['reports'][20] = " para ";
$LANG['plugin_addressing']['reports'][23] = "Reservation";
$LANG['plugin_addressing']['reports'][24] = "IP(s) Liberado";
$LANG['plugin_addressing']['reports'][25] = "Fila Azul";
$LANG['plugin_addressing']['reports'][26] = "Numero de IP(s) Livre(s)";
$LANG['plugin_addressing']['reports'][27] = "Numero de IP(s) Reservado(s)";
$LANG['plugin_addressing']['reports'][28] = "Número de endereços IP atribuídos (Não duplicados)";
$LANG['plugin_addressing']['reports'][29] = "Duplicados";
$LANG['plugin_addressing']['reports'][30] = "Ping IP Liberado";
$LANG['plugin_addressing']['reports'][31] = "Ping OK";
$LANG['plugin_addressing']['reports'][32] = "Ping KO";
$LANG['plugin_addressing']['reports'][34] = "IP Real Liberado (Ping=OK)";
$LANG['plugin_addressing']['reports'][36] = "Detected subnet list : ";
$LANG['plugin_addressing']['reports'][37] = "Invalid data !!";
$LANG['plugin_addressing']['reports'][38] = "First IP";
$LANG['plugin_addressing']['reports'][39] = "Last IP";

$LANG['plugin_addressing']['profile'][0] = "Gerenciar Permissões";
$LANG['plugin_addressing']['profile'][3] = "Gerar Tabela";

$LANG['plugin_addressing']['setup'][8] = "Detectado um problema com a Range de IP";
$LANG['plugin_addressing']['setup'][10] = "Mostrar";
$LANG['plugin_addressing']['setup'][11] = "Atribuir IP";
$LANG['plugin_addressing']['setup'][12] = "Ip Livre";
$LANG['plugin_addressing']['setup'][13] = "Mesmo IP";
$LANG['plugin_addressing']['setup'][14] = "IP Reservado";
$LANG['plugin_addressing']['setup'][15] = "Sim";
$LANG['plugin_addressing']['setup'][16] = "Não";
$LANG['plugin_addressing']['setup'][19] = "Sistem";
$LANG['plugin_addressing']['setup'][20] = "Linux ping";
$LANG['plugin_addressing']['setup'][21] = "Windows";
$LANG['plugin_addressing']['setup'][22] = "Usar Ping";
$LANG['plugin_addressing']['setup'][24] = "Rede Padrão";
$LANG['plugin_addressing']['setup'][25] = "Linux fping";
$LANG['plugin_addressing']['setup'][27] = "Problem when adding, required fields are not here";
$LANG['plugin_addressing']['setup'][28] = "BSD ping";
$LANG['plugin_addressing']['setup'][29] = "MacOSX ping";

?>