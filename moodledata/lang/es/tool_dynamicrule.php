<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_dynamicrule', language 'es', version '4.2'.
 *
 * @package     tool_dynamicrule
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'Activa';
$string['activerules'] = 'Reglas activas';
$string['addcondition'] = 'Agregar condición';
$string['addconditions'] = 'Agregar condiciones para esta regla';
$string['addoutcome'] = 'Agregar acción';
$string['addoutcomes'] = 'Agregar acciones para esta regla';
$string['archive'] = 'Archivar';
$string['archived'] = 'Archivada';
$string['archivedrules'] = 'Reglas archivadas';
$string['availableplaceholders'] = 'Marcadores de posición disponibles';
$string['body'] = 'Cuerpo';
$string['cachedef_conditions'] = 'Almacena la lista de condiciones de reglas dinámicas y eventos que necesitan atender.';
$string['cannotdisablerule'] = 'No tenés permisos suficientes para deshabilitar esta regla \'{$a}\'';
$string['cannotdisablesharedrule'] = 'La regla compartida \'{$a}\' sólo se puede deshabilitar desde el espacio compartido.';
$string['cannotenablecomponentrule'] = 'No se puede habilitar la regla \'{$a}\' a menos que tenga acciones y no contenga ningún error.';
$string['cannotenablerule'] = 'No se puede habilitar la regla \'{$a}\' a menos que tenga condiciones, acciones y no contenga ningún error.';
$string['cannotenablesharedrule'] = 'La regla compartida \'{$a}\' sólo se puede habilitar desde el espacio compartido.';
$string['cohort'] = 'Cohorte';
$string['conditioncohortmember'] = 'Usuario es miembro de la cohorte';
$string['conditioncohortmemberdescription'] = 'Usuarios que son miembros de la cohorte \'{$a}\'';
$string['conditioncohortmemberdescriptionwithdate'] = 'Usuarios que son miembros de la cohorte \'{$a->name}\'<br />
Agregado a la cohorte en o después de: \'{$a->fecha de condición}\'';
$string['conditioncohortnotmember'] = 'El usuario no es miembro de una cohorte';
$string['conditioncohortnotmemberdescription'] = 'Usuarios que no son miembros de la cohorte \'{$a}\'';
$string['conditioncompetencydescription'] = 'Usuarios que alcanzaron la competencia \'{$a}\'';
$string['conditioncompetencyselector'] = 'Seleccionar competencia';
$string['conditioncompetencyselector_help'] = 'Seleccionar la competencia para encontrar los usuarios que la alcanzaron';
$string['conditioncompetencytitle'] = 'El usuario ha alcanzado la competencia';
$string['conditioncoursecompleted'] = 'Curso completado';
$string['conditioncoursecompletedafter'] = 'Fecha de finalización después de {$a}';
$string['conditioncoursecompletedbefore'] = 'Fecha de finalización antes de {$a}';
$string['conditioncoursecompleteddescription'] = 'Usuarios que completaron el curso {$a}';
$string['conditioncourselastaccess'] = 'Último acceso al curso';
$string['conditioncourselastaccessdescriptionafter'] = 'Usuarios que accedieron por última vez al curso \'{$a->coursename}\' desde {$a->conditiondate}';
$string['conditioncourselastaccessdescriptionbefore'] = 'Usuarios que accedieron por última vez al curso \'{$a->coursename}\' antes de {$a->conditiondate}';
$string['conditioncourselastaccessdescriptionbeforelast'] = 'Usuarios que no han accedido al curso \'{$a->coursename}\' para {$a->conditiondate}';
$string['conditioncourselastaccessdescriptionever'] = 'Usuarios que han accedido al curso \'{$a->coursename}\' al menos una vez';
$string['conditioncourselastaccessdescriptioninlast'] = 'Usuarios que accedieron al curso \'{$a->coursename}\' en el último {$a->conditiondate}';
$string['conditioncourselastaccessdescriptionnever'] = 'Usuarios que nunca accedieron al curso \'{$a->coursename}\'';
$string['conditioncourselastaccessnotice'] = 'Esta condición se aplica a los usuarios que están matriculados en el curso.';
$string['conditioncoursenotcompleted'] = 'Curso no completado';
$string['conditioncoursenotcompleteddescription'] = 'Usuarios que no completaron el curso \'{$a}\'';
$string['conditioncoursenotcompletedformnotice'] = 'Esta condición se aplica a los usuarios independientemente de su matriculación en el curso.';
$string['conditioncriteria'] = 'Criterio';
$string['conditioncriterianotavailableyet'] = 'Aún no disponible';
$string['conditionisbroken'] = 'Esta condición contiene un error.';
$string['conditionisnotavailable'] = 'La condición no está disponible.';
$string['conditionnotsaved'] = 'La condición no está guardada.';
$string['conditions'] = 'Condiciones';
$string['conditionusercreated'] = 'Tiempo desde que se creó el usuario';
$string['conditionusercreateddescriptionbefore'] = 'Usuarios que fueron creados durante el/la último/a {$a}';
$string['conditionusercreateddescriptionover'] = 'Usuarios que se crearon antes del último {$a}';
$string['conditionuserenrolled'] = 'Usuario matriculado';
$string['conditionuserenrolleddescription'] = 'Usuarios que están matriculados en el curso \'{$a->course}\'<br />
Método de matriculación: \'{$a->enrol}\'';
$string['conditionuserenrolleddescriptionwithdate'] = 'Usuarios que están matriculados en el curso \'{$a->course}\'<br />
Método de matriculación: \'{$a->enrol}\'<br />
Fecha de inicio de matriculación a partir de: \'{$a->conditiondate}\'';
$string['conditionuserlastlogin'] = 'Último inicio de sesión del usuario';
$string['conditionuserlastlogindescriptionbefore'] = 'Usuarios que se conectaron por última vez antes de la última {$a}';
$string['conditionuserlastlogindescriptionever'] = 'Usuarios que iniciaron sesión al menos una vez';
$string['conditionuserlastlogindescriptioninlast'] = 'Usuarios que iniciaron sesión durante los últimos {$a}';
$string['conditionuserlastlogindescriptionnever'] = 'Usuarios que nunca iniciaron sesión';
$string['conditionusernotenrolled'] = 'Usuario no matriculado';
$string['conditionusernotenrolleddescription'] = 'Usuarios que no están matriculados en el curso \'{$a->course}\'<br />
Método de matriculación: \'{$a->enrol}\'';
$string['conditionuserprofilefield'] = 'Campo de perfil del usuario';
$string['conditionuserprofilefielddescription'] = 'Usuarios cuyo valor para el campo de perfil \'{$a->fieldname}\' {$a->fieldvalue}';
$string['conditionuserprofilefielddescriptiontext'] = 'Usuarios cuyo valor para el campo de perfil \'{$a->fieldname}\' {$a->fieldvalue}';
$string['confirmarchiverule'] = '¿Estás seguro de archivar la regla \'{$a}\'? Las reglas dinámicas archivadas seguirán estando disponibles para reportes actuales y futuros.';
$string['confirmdeletecondition'] = '¿Estás seguro de eliminar la condición \'{$a}\' y todos los datos asociados? Esta acción no se puede deshacer.';
$string['confirmdeleteoutcome'] = '¿Estás seguro de eliminar la acción \'{$a}\' y todos los datos asociados? Esta acción no se puede deshacer.';
$string['confirmdeleterule'] = '¿Estás seguro de eliminar la regla \'{$a}\' y todos los datos asociados? Esta acción no se puede deshacer.';
$string['confirmduplicaterule'] = '¿Estás seguro de que deseás duplicar la regla \'{$a}\'?';
$string['confirmeditrule'] = 'Dado que algunos usuarios coincidieron con esta regla en el pasado, sólo podrás editar las acciones de la regla. Podrías considerar duplicarla para modificar sus condiciones.';
$string['confirmenablecomponentrule'] = '¿Estás seguro de que deseás habilitar esta regla? Habilitarla afectará a {$a} usuarios.';
$string['confirmenablerule'] = 'Las condiciones se bloquearán cuando al menos un usuario se vea afectado por esta regla. ¿Estás seguro de habilitar esta regla?';
$string['countmatchingusers'] = '{$a} coincidencias totales';
$string['coursecompletiondate'] = 'Fecha de completud';
$string['courseinternalid'] = 'ID interno del curso utilizado en las URL';
$string['courselastaccesstime'] = 'Último acceso del usuario al curso';
$string['courselastaccesstime_help'] = 'Tené en cuenta que la regla sólo se aplicará una vez a los usuarios que coincidieron, por lo que no se puede usar para recordatorios recurrentes para aquellos usuarios que no han accedido a los cursos durante algún tiempo.<br />También tené en cuenta que una vez que un usuario está matriculado en un curso, pueden coincidir con la condición "Nunca accedido" inmediatamente.';
$string['courseurl'] = 'URL del curso';
$string['creationdate'] = 'Fecha de creación';
$string['creationdate_help'] = 'Podés seleccionar una fecha relativa a la fecha actual para que coincida con los usuarios creados dentro del período de tiempo especificado.';
$string['dateinthefuture'] = 'Es en el futuro';
$string['dateinthepast'] = 'Es en el pasado';
$string['datelast'] = 'Último {$a} día';
$string['datelastdays'] = 'Últimos... días';
$string['datelastplural'] = 'Últimos {$a} días';
$string['datenext'] = 'Próximo {$a} día';
$string['datenextdays'] = 'Próximos ... días';
$string['datenextplural'] = 'Próximos {$a} días';
$string['datetypeever'] = 'Nunca';
$string['datetypeinlast'] = 'Durante el último...';
$string['datetypenever'] = 'Nunca';
$string['datetypenone'] = 'Sin ajustar';
$string['datetypepast'] = 'Antes de la última...';
$string['deletecondition'] = 'Eliminar condición';
$string['deleteoutcome'] = 'Eliminar acción';
$string['disablerulemsg'] = 'Deshabilitar regla';
$string['duplicate'] = 'Duplicar';
$string['dynamicrule:manage'] = 'Gestionar reglas dinámicas';
$string['editanyway'] = 'Editar de todos modos';
$string['editcondition'] = 'Edita condición';
$string['editdetails'] = 'Editar detalles de la regla \'{$a}\'';
$string['editdetailsbutton'] = 'Editar detalles';
$string['editoutcome'] = 'Editar acción';
$string['editrulename'] = 'Editar nombre de la regla \'{$a}\'';
$string['enable'] = 'Habilitar';
$string['enabled'] = 'Habilitada';
$string['enablehelp'] = 'habilitando regla';
$string['enablehelp_help'] = 'Una regla requiere al menos una condición y una acción para estar habilitada. Además, las condiciones o acciones no deben contener errores.';
$string['enablehelpmodal'] = 'habilitando regla';
$string['enablehelpmodal_help'] = 'Una regla requiere al menos una acción para estar habilitada.';
$string['enablerulemsg'] = 'Habilitar regla';
$string['errorbadgehasextracriteria'] = 'Esta insignia tiene otro criterio requerido además de la emisión manual, por lo que no puede ser emitida por regla dinámica';
$string['errorbadgenopermission'] = 'No tenés el rol requerido para emitir esta insignia';
$string['errorcannotcreate'] = 'No tenés permiso para crear reglas';
$string['errorcannotmanage'] = 'No tenés permiso para gestionar reglas';
$string['errorcannotmanagecondition'] = 'No tenés permiso para gestionar esta condición';
$string['errorcannotmanageoutcome'] = 'No tenés permiso para gestionar esta acción';
$string['errorcohortnotamember'] = 'No se puede eliminar al usuario de la cohorte porque no pertenece a ella';
$string['errorcompletionnotenabled'] = 'La finalización no está habilitada para este curso';
$string['errorinvalidbadge'] = 'Insignia inválida';
$string['errorinvalidbody'] = 'Cuerpo de la notificación inválido';
$string['errorinvalidcertificatetenant'] = 'El certificado no puede ser usado en este micrositio';
$string['errorinvalidcohort'] = 'Cohorte inválida';
$string['errorinvalidcohorttenant'] = 'La cohorte no puede ser usada en este micrositio';
$string['errorinvalidcompetency'] = 'Competencia inválida';
$string['errorinvalidcourse'] = 'Curso inválido';
$string['errorinvalidcoursetenant'] = 'Este curso no puede ser usado en este micrositio';
$string['errorinvalidenrolmentmethod'] = 'Este curso no tiene un método de matriculación seleccionado o no está habilitado';
$string['errorinvalidoperator'] = 'Operador inválido.';
$string['errorinvalidsubject'] = 'Asunto de notificación inválido';
$string['errorinvaliduserlastcourseaccess'] = 'Última fecha de acceso al curso inválida';
$string['errorinvaliduserlastlogin'] = 'Última fecha de inicio de sesión inválida';
$string['errorinvaliduserlastlogintype'] = 'Último tipo de inicio de sesión inválido';
$string['errorinvaliduserprofilefield'] = 'Campo de perfil inválido';
$string['errorinvaliduserprofilefieldvalue'] = 'Valor del campo de perfil inválido';
$string['errornopermissionissuecertificate'] = 'No tenés permiso para emitir este certificado';
$string['ever'] = 'nunca';
$string['exporterdescription'] = 'Definición de reglas dinámicas, condiciones y acciones';
$string['exportselectactive'] = 'Seleccioná todas las reglas dinámicas (excepto las archivadas)';
$string['exportselectall'] = 'Seleccioná todas las reglas dinámicas (incluyendo las archivadas)';
$string['exportselectenabled'] = 'Seleccioná todas las reglas dinámicas habilitadas';
$string['exportsettings'] = 'Definiciones de reglas, condiciones y acciones';
$string['exportsettings_help'] = 'Todas las reglas se desactivarán cuando se importen, independientemente de su estado original.';
$string['field'] = 'Campo';
$string['filterrulename'] = 'Nombre de la regla';
$string['general'] = 'General';
$string['importlogerror'] = 'No se pudo importar la regla \'{$a}\'';
$string['importlogerrorinvalidcondition'] = 'Condición de regla faltante o inválida';
$string['importlogerrorinvalidoutcome'] = 'Resultado de la regla faltante o inválido';
$string['importlogsuccess'] = 'Se creó la nueva regla \'{$a->name}\' con {$a->conditionscount} condiciones y {$a->outcomescount} acciones';
$string['importlogsuccesslink'] = 'Se creó la nueva regla \'<a href="{$a->url}">{$a->name}</a>\' con {$a->conditionscount} condiciones y {$a->outcomescount} acciones';
$string['importselectall'] = 'Seleccionar todas las reglas dinámicas de este archivo';
$string['importselectspecified'] = 'Seleccionar manualmente...';
$string['includesuspendedusers'] = 'Incluye usuarios suspendidos';
$string['includesuspendedusers_help'] = 'Si está marcada, la regla evaluará las condiciones también contra los usuarios cuyas cuentas fueron suspendidas en este sitio. Luego intentará aplicar las acciones a todos los usuarios que coincidan. Tené en cuenta que es posible que algunas acciones no se apliquen por completo a los usuarios suspendidos, por ejemplo, nunca reciben notificaciones.';
$string['lastlogin'] = 'El último ingreso del usuario fue';
$string['lastlogin_help'] = 'Podés seleccionar una fecha relativa a la fecha actual o a usuarios que nunca hayan iniciado sesión.';
$string['limitreached'] = 'Límite de reglas dinámicas alcanzado';
$string['limitreacheddescr'] = 'Alcanzaste el límite de reglas dinámicas en este sitio. Tené en cuenta que las reglas archivadas también se contabilizan.';
$string['limitreachednumdescr'] = 'Solo podés crear {$a} regla(s) dinámica(s) en este sitio. Tené en cuenta que las reglas archivadas también son contabilizadas.';
$string['managebadges'] = 'Gestionar insignias';
$string['managecohorts'] = 'Gestionar cohortes';
$string['managecompetencies'] = 'Gestionar competencias';
$string['managerules'] = 'Gestionar reglas';
$string['match'] = 'Coincidir';
$string['matchedtime'] = 'Alcanzado en';
$string['matchlimitinvalid'] = 'La regla debe activarse al menos una vez.';
$string['matchstatus'] = 'Estatus';
$string['matchstatusdone'] = 'Completado';
$string['matchstatuserror'] = 'Falló';
$string['matchstatusprogress'] = 'En progreso';
$string['messageprovider:notificationoutcome'] = 'Acción de notificación para reglas dinámicas';
$string['missingcondition'] = 'Condición faltante';
$string['missingconditiondescr'] = 'La condición \'{$a->condition}\' no existe en el plugin \'{$a->plugin}\'.';
$string['missingoutcome'] = 'Acción faltante';
$string['missingoutcomedescr'] = 'La acción \'{$a->outcome}\' no existe en el plugin \'{$a->plugin}\'.';
$string['newnameforrule'] = 'Nuevo nombre para la regla \'{$a}\'';
$string['newrule'] = 'Nueva regla';
$string['noavailablebadges'] = 'No hay insignias disponibles';
$string['noavailablecohorts'] = 'No hay cohortes disponibles';
$string['noavailablecompetencies'] = 'No hay competencias disponibles';
$string['noavailablecompletioncourses'] = 'No hay cursos con finalización habilitada';
$string['noavailableenrolledcourses'] = 'No hay cursos donde puedas acceder a la lista de participantes';
$string['noruleconditions'] = 'No hay condiciones en esta regla';
$string['noruleoutcomes'] = 'Sin acciones para esta regla';
$string['operatorafter'] = 'Después';
$string['operatoranytime'] = 'Cualquier momento';
$string['operatorbefore'] = 'Antes';
$string['outcomebadge'] = 'Otorgar insignia';
$string['outcomebadgedescription'] = 'Otorgar insignia \'{$ a}\' a los usuarios';
$string['outcomecertificate'] = 'Emitir certificado';
$string['outcomecertificatedescription'] = 'Emitir certificado \'{$ a}\' a los usuarios';
$string['outcomecohort'] = 'Agregar a la cohorte';
$string['outcomecohortbroken'] = 'La cohorte con ID \'{$a}\' no existe.';
$string['outcomecohortdescription'] = 'Agregar usuarios a la cohorte \'{$a}\'';
$string['outcomecohortremove'] = 'Remover de la cohorte';
$string['outcomecohortremovedescription'] = 'Eliminar usuarios de la cohorte \'{$a}\'';
$string['outcomecompetency'] = 'Otorgar competencia';
$string['outcomecompetencybroken'] = 'La competencia con ID \'{$ a}\' no existe.';
$string['outcomecompetencydescription'] = 'Otorgar competencia \'{$ a}\' a los usuarios';
$string['outcomeisbroken'] = 'Esta acción contiene un error.';
$string['outcomeisnotavailable'] = 'Esta acción no está disponible.';
$string['outcomenotification'] = 'Notificación';
$string['outcomenotificationdescription'] = 'Enviar notificaciones \'{$a}\' a usuarios';
$string['outcomenotsaved'] = 'La acción no se guarda.';
$string['outcomes'] = 'Acciones';
$string['per'] = 'por';
$string['placeholdersdesc'] = 'Marcador de posición';
$string['placeholdersdesc_help'] = 'Los marcadores de posición te permiten agregar un contenido dinámico, ej. {{userfullname}} se reemplazará con el nombre completo del usuario en la notificación enviada a este.';
$string['pluginname'] = 'Reglas dinámicas';
$string['previewcoursefullname'] = 'Nombre completo del curso';
$string['previewcourseshortname'] = 'Nombre corto del curso';
$string['privacy:metadata:tool_dynamicrule_match'] = 'Información sobre coincidencias de usuario con condiciones de reglas particulares. Como resultado de la coincidencia, el usuario se ve afectado por las acciones definidas en la regla.';
$string['privacy:metadata:tool_dynamicrule_match:matchedtime'] = 'Marca de tiempo que indica cuándo se ha emparejado al usuario con las condiciones de la regla.';
$string['privacy:metadata:tool_dynamicrule_match:ruleid'] = 'El ID de la regla.';
$string['privacy:metadata:tool_dynamicrule_match:unmatchedtime'] = 'Marca de tiempo que indica cuándo el usuario ya no cumple la condición de la regla después de que se haya aplicado la acción.';
$string['privacy:metadata:tool_dynamicrule_match:userid'] = 'El ID del usuario que ha coincidido con las condiciones de la regla.';
$string['reg_wpdynamicrules'] = 'Número de reglas dinámicas ({$a})';
$string['reportmatchingusers'] = 'Reporte de usuarios que coinciden con una regla dinámica';
$string['reportrulematches'] = 'Reporte con usuarios que coincidieron y no coincidieron con una regla dinámica';
$string['rolemanager'] = 'Gestor de reglas dinámicas';
$string['rolemanagerdescription'] = 'Permite crear y gestionar reglas dinámicas dentro del micrositio actual';
$string['rulearchive'] = 'Archivar';
$string['ruleeditactions'] = 'Editar acciones';
$string['ruleeditdetails'] = 'Editar detalles';
$string['rulematchfreq'] = 'Límites de acción de la regla';
$string['rulematchfreq_help'] = 'Tan pronto como los usuarios cumplan con las condiciones de la regla, se les aplicarán las acciones. Estas acciones no se volverán a aplicar si los usuarios siguen cumpliendo las condiciones. Sin embargo, si un usuario deja de emparejar y luego vuelve a emparejar, las acciones pueden volver a aplicarse. Esta configuración define el número máximo de veces que se deben aplicar las acciones.';
$string['rulematchfreqdesc0'] = 'No puede ser aplicada más de';
$string['rulematchfreqdesc1'] = 'veces';
$string['rulematchfreqenable'] = 'Límite de veces en que las acciones son aplicadas para cada usuario';
$string['rulename'] = 'Nombre';
$string['rulenamecopy'] = '{$a->name} Copiar {$a->number}';
$string['rulenotfound'] = 'La regla no fue encontrada.';
$string['ruleselectitemarchived'] = '{$a} (archivada)';
$string['ruleunarchive'] = 'Desarchivar';
$string['ruleviewreport'] = 'Ver reporte';
$string['scheduledtask'] = 'Tarea programada';
$string['seedetails'] = 'Ver detalles';
$string['seemore'] = 'Ver más...';
$string['select'] = 'Seleccionar';
$string['selectbadge'] = 'Seleccionar insignia';
$string['selectbadge_help'] = 'Para que se emita mediante una regla dinámica, la insignia del sitio debe estar habilitada y contener criterios manuales de emisión.';
$string['selectcertificate'] = 'Seleccionar certificado';
$string['selectcompetency'] = 'Seleccionar competencia';
$string['selectcompetency_help'] = 'Seleccionar competencias a emitir';
$string['sendto'] = 'Enviar a';
$string['sendtodptlead'] = 'Jefe de departamento';
$string['sendtomanager'] = 'Gestor';
$string['sendtomatching'] = 'Usuarios coincidentes';
$string['sitelink'] = 'Link del sitio';
$string['sitelinkspecific'] = 'Link específico para el micrositio';
$string['siteshortname'] = 'Nombre corto del micrositio';
$string['subject'] = 'Asunto';
$string['taskprocessrules'] = 'Procesar reglas';
$string['timeadded'] = 'Agregado a la cohorte en o después de esta fecha y hora';
$string['timecreated'] = 'Creada';
$string['timeenrolled'] = 'La fecha y hora de inicio de la inscripción es el o después del';
$string['toomanybadgestoshow'] = 'Demasiadas insignias para mostrar';
$string['toomanycertificatestoshow'] = 'Demasiadas certificaciones ({$a}) para mostrar';
$string['toomanycompetenciestoshow'] = 'Demasiadas competencias ({$a}) para mostrar';
$string['uneditabledescription'] = '{$a} (detalles no disponibles)';
$string['usercreatetype_help'] = 'Podés seleccionar una fecha relativa a la fecha actual para que coincida con los usuarios creados dentro del período de tiempo especificado.';
$string['userplaceholders'] = 'Marcadores de posición del usuario';
$string['viewmatchingusers'] = 'Ver usuarios coincidentes';
$string['warningchangeswillnotapplymatchedusers'] = 'Los cambios no se aplicarán a los usuarios que coincidieron con esta regla en el pasado';
