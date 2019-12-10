<?php

namespace RedsysConsultasPHP\Client;

/**
 * Class RedsysErrors to obtain error code info.
 */
class RedsysErrorInfo {

    /**
     * Error codes.
     */
    const ERROR_CODES = [
        'SIS0007' => 'Error al desmontar el XML de entrada o error producido al acceder mediante un sistema de firma antiguo teniendo configurado el tipo de clave HMAC SHA256',
        'SIS0008' => 'Error falta Ds_Merchant_MerchantCode ',
        'SIS0009' => 'Error de formato en Ds_Merchant_MerchantCode ',
        'SIS0010' => 'Error falta Ds_Merchant_Terminal ',
        'SIS0011' => 'Error de formato en Ds_Merchant_Terminal ',
        'SIS0014' => 'Error de formato en Ds_Merchant_Order',
        'SIS0015' => 'Error falta Ds_Merchant_Currency',
        'SIS0016' => 'Error de formato en Ds_Merchant_Currency',
        'SIS0017' => 'Error no se admiten operaciones en pesetas',
        'SIS0018' => 'Error falta Ds_Merchant_Amount',
        'SIS0019' => 'Error de formato en Ds_Merchant_Amount',
        'SIS0020' => 'Error falta Ds_Merchant_MerchantSignature',
        'SIS0021' => 'Error la Ds_Merchant_MerchantSignature viene vacía',
        'SIS0022' => 'Error de formato en Ds_Merchant_TransactionType',
        'SIS0023' => 'Error Ds_Merchant_TransactionType desconocido',
        'SIS0024' => 'Error Ds_Merchant_ConsumerLanguage tiene mas de 3 posiciones',
        'SIS0025' => 'Error de formato en Ds_Merchant_ConsumerLanguage',
        'SIS0026' => 'Error No existe el comercio / terminal enviado',
        'SIS0027' => 'Error Moneda enviada por el comercio es diferente a la que tiene asignada para ese terminal',
        'SIS0028' => 'Error Comercio / terminal está dado de baja',
        'SIS0030' => 'Error en un pago con tarjeta ha llegado un tipo de operación que no es ni pago ni preautorización',
        'SIS0031' => 'Método de pago no definido',
        'SIS0033' => 'Error en un pago con móvil ha llegado un tipo de operación que no es ni pago ni preautorización',
        'SIS0034' => 'Error de acceso a la Base de Datos',
        'SIS0037' => 'El número de teléfono no es válido',
        'SIS0038' => 'Error en java',
        'SIS0040' => 'Error el comercio / terminal no tiene ningún método de pago asignado',
        'SIS0041' => 'Error en el cálculo de la HASH de datos del comercio',
        'SIS0042' => 'La firma enviada no es correcta',
        'SIS0043' => 'Error al realizar la notificación on-line',
        'SIS0046' => 'El bin de la tarjeta no está dado de alta',
        'SIS0051' => 'Error número de pedido repetido',
        'SIS0054' => 'Error no existe operación sobre la que realizar la devolución',
        'SIS0055' => 'Error existe más de un pago con el mismo número de pedido',
        'SIS0056' => 'La operación sobre la que se desea devolver no está autorizada',
        'SIS0057' => 'El importe a devolver supera el permitido',
        'SIS0058' => 'Inconsistencia de datos, en la validación de una confirmación',
        'SIS0059' => 'Error no existe operación sobre la que realizar la confirmación',
        'SIS0060' => 'Ya existe una confirmación asociada a la preautorización',
        'SIS0061' => 'La preautorización sobre la que se desea confirmar no está autorizada',
        'SIS0062' => 'El importe a confirmar supera el permitido',
        'SIS0063' => 'Número de tarjeta no disponible',
        'SIS0064' => 'El número de tarjeta no puede tener más de 19 posiciones',
        'SIS0065' => 'El número de tarjeta no es numérico',
        'SIS0066' => 'Mes de caducidad no disponible',
        'SIS0067' => 'El mes de la caducidad no es numérico',
        'SIS0068' => 'El mes de la caducidad no es válido',
        'SIS0069' => 'Año de caducidad no disponible',
        'SIS0070' => 'El Año de la caducidad no es numérico',
        'SIS0071' => 'Tarjeta caducada',
        'SIS0072' => 'Operación no anulable',
        'SIS0074' => 'Error falta Ds_Merchant_Order',
        'SIS0075' => 'Error el Ds_Merchant_Order tiene menos de 4 posiciones o más de 12',
        'SIS0076' => 'Error el Ds_Merchant_Order no tiene las cuatro primeras posiciones numéricas',
        'SIS0077' => 'Error el Ds_Merchant_Order no tiene las cuatro primeras posiciones numéricas. No se utiliza',
        'SIS0078' => 'Método de pago no disponible',
        'SIS0079' => 'Error al realizar el pago con tarjeta',
        'SIS0081' => 'La sesión es nueva, se han perdido los datos almacenados',
        'SIS0084' => 'El valor de Ds_Merchant_Conciliation es nulo',
        'SIS0085' => 'El valor de Ds_Merchant_Conciliation no es numérico',
        'SIS0086' => 'El valor de Ds_Merchant_Conciliation no ocupa 6 posiciones',
        'SIS0089' => 'El valor de Ds_Merchant_ExpiryDate no ocupa 4 posiciones',
        'SIS0092' => 'El valor de Ds_Merchant_ExpiryDate es nulo',
        'SIS0093' => 'Tarjeta no encontrada en la tabla de rangos',
        'SIS0094' => 'La tarjeta no fue autenticada como 3D Secure',
        'SIS0097' => 'Valor del campo Ds_Merchant_CComercio no válido',
        'SIS0098' => 'Valor del campo Ds_Merchant_CVentana no válido',
        'SIS0112' => 'Error El tipo de transacción especificado en Ds_Merchant_Transaction_Type no esta permitido',
        'SIS0113' => 'Excepción producida en el servlet de operaciones',
        'SIS0114' => 'Error, se ha llamado con un GET en lugar de un POST',
        'SIS0115' => 'Error no existe operación sobre la que realizar el pago de la cuota',
        'SIS0116' => 'La operación sobre la que se desea pagar una cuota no es una operación válida',
        'SIS0117' => 'La operación sobre la que se desea pagar una cuota no está autorizada',
        'SIS0118' => 'Se ha excedido el importe total de las cuotas',
        'SIS0119' => 'Valor del campo Ds_Merchant_DateFrecuency no válido',
        'SIS0120' => 'Valor del campo Ds_Merchant_ChargeExpiryDate no válido',
        'SIS0121' => 'Valor del campo Ds_Merchant_SumTotal no válido',
        'SIS0122' => 'Valor del campo Ds_Merchant_DateFrecuency o no Ds_Merchant_SumTotal tiene formato incorrecto',
        'SIS0123' => 'Se ha excedido la fecha tope para realizar transacciones',
        'SIS0124' => 'No ha transcurrido la frecuencia mínima en un pago recurrente sucesivo',
        'SIS0132' => 'La fecha de Confirmación de Autorización no puede superar en más de 7 días a la de Preautorización',
        'SIS0133' => 'La fecha de Confirmación de Autenticación no puede superar en más de 45 días a la de Autenticación Previa',
        'SIS0139' => 'Error el pago recurrente inicial está duplicado',
        'SIS0142' => 'Tiempo excedido para el pago',
        'SIS0197' => 'Error al obtener los datos de cesta de la compra en operación tipo pasarela',
        'SIS0198' => 'Error el importe supera el límite permitido para el comercio',
        'SIS0199' => 'Error el número de operaciones supera el límite permitido para el comercio',
        'SIS0200' => 'Error el importe acumulado supera el límite permitido para el comercio',
        'SIS0214' => 'El comercio no admite devoluciones',
        'SIS0216' => 'Error Ds_Merchant_CVV2 tiene más de 3 posiciones',
        'SIS0217' => 'Error de formato en Ds_Merchant_CVV2',
        'SIS0218' => 'El comercio no permite operaciones seguras por la entrada /operaciones',
        'SIS0219' => 'Error el número de operaciones de la tarjeta supera el límite permitido para el comercio',
        'SIS0220' => 'Error el importe acumulado de la tarjeta supera el límite permitido para el comercio',
        'SIS0221' => 'Error el CVV2 es obligatorio',
        'SIS0222' => 'Ya existe una anulación asociada a la preautorización',
        'SIS0223' => 'La preautorización que se desea anular no está autorizada',
        'SIS0224' => 'El comercio no permite anulaciones por no tener firma ampliada',
        'SIS0225' => 'Error no existe operación sobre la que realizar la anulación',
        'SIS0226' => 'Inconsistencia de datos, en la validación de una anulación',
        'SIS0227' => 'Valor del campo Ds_Merchant_TransactionDate no válido',
        'SIS0228' => 'Sólo se puede hacer pago aplazado con tarjeta de crédito On-us',
        'SIS0229' => 'No existe el código de pago aplazado solicitado',
        'SIS0230' => 'El comercio no permite pago fraccionado',
        'SIS0252' => 'El comercio no permite el envío de tarjeta',
        'SIS0253' => 'La tarjeta no cumple el check-digit',
        'SIS0254' => 'El número de operaciones de la IP supera el límite permitido por el comercio',
        'SIS0255' => 'El importe acumulado por la IP supera el límite permitido por el comercio',
        'SIS0256' => 'El comercio no puede realizar preautorizaciones',
        'SIS0257' => 'Esta tarjeta no permite operativa de preautorizaciones',
        'SIS0258' => 'Inconsistencia de datos, en la validación de una confirmación',
        'SIS0261' => 'Operación detenida por superar el control de restricciones en la entrada al SIS',
        'SIS0270' => 'El comercio no puede realizar autorizaciones en diferido',
        'SIS0274' => 'Tipo de operación desconocida o no permitida por esta entrada al SIS',
        'SIS0334' => 'Límite TPV superado (pendiente de validar)',
        'SIS0429' => 'Error en la versión enviada por el comercio en el parámetro Ds_SignatureVersion',
        'SIS0430' => 'Error al decodificar el parámetro Ds_MerchantParameters',
        'SIS0431' => 'Error del objeto JSON que se envía codificado en el parámetro Ds_MerchantParameters',
        'SIS0432' => 'Error FUC del comercio erróneo',
        'SIS0433' => 'Error Terminal del comercio erróneo',
        'SIS0434' => 'Error ausencia de número de pedido en la operación enviada por el comercio',
        'SIS0435' => 'Error en el cálculo de la firma',
        'SIS0444' => 'Error producido al acceder mediante un sistema de firma antiguo teniendo configurado el tipo de clave HMAC SHA256 ',
        'SIS0448' => 'Error, la tarjeta de la operación es DINERS y el comercio no tiene el método de pago "Pago DINERS"',
        'SIS0449' => 'Error, el tipo de pago de la operación Ds_TransactionType (A) no está permitido para el comercio.',
        'SIS0450' => 'Error, el tipo de pago de la operación Ds_TransactionType (A) no está permitido para el comercio para tarjetas Amex.',
        'SIS0452' => 'Método de pago no disponible (Tarjeta 4B)',
        'SIS0453' => 'Error, la tarjeta de la operación es JCB y el comercio no tiene el método de pago "Pago JCB"',
        'SIS0454' => 'Error, la tarjeta de la operación es AMEX y el comercio no tiene el método de pago "Pago Amex"',
        'SIS0455' => 'Método de pago no disponible',
        'SIS0456' => 'Método de pago no seguro (Visa) no disponible',
        'SIS0457' => 'Método de pago no seguro (MasterCard) no disponible',
        'SIS0458' => 'Método de pago no seguro (MasterCard) no disponible',
        'SIS0459' => 'Método de pago no seguro (JCB) no disponible',
        'SIS0460' => 'Método de pago no seguro (Amex) no disponible',
        'SIS0461' => 'Método de pago no seguro (Amex) no disponible',
        'SIS0463' => 'Método de pago no disponible',
        'SIS0464' => 'Método de pago no seguro no disponible (MasterCard Comercial)',
        'SIS0465' => 'Método de pago no seguro no disponible',
        'SIS0469' => 'Error, no se ha superado el proceso de control de fraude.',
        'SIS0487' => 'Error, el comercio no tiene el método de pago Paygold',
        'SIS0488' => 'Error, el comercio no tiene el método de pago Pago Manual',
        'XML0000' => 'Errores varios en el proceso del XML-String recibido',
        'XML0001' => 'Error en la generación del DOM a partir del XML-String recibido y la DTD definida',
        'XML0002' => 'No existe el elemento Message en el XML-String recibido',
        'XML0003' => 'El tipo de Message en el XML-String recibido tiene un valor desconocido o inválido en la petición',
        'XML0004' => 'No existe el elemento Ds_MerchantCode en el XML-String recibido',
        'XML0005' => 'El elemento Ds_MerchantCode viene vacío en el XML-String recibido',
        'XML0006' => 'El elemento Ds_MerchantCode tiene una longitud incorrecta en el XML-String recibido',
        'XML0007' => 'El elemento Ds_MerchantCode no tiene formato numérico en el XML-String recibido',
        'XML0008' => 'No existe el elemento Ds_Terminal en el XML-String recibido',
        'XML0009' => 'El elemento Ds_Terminal viene vacío en el XML-String recibido',
        'XML0010' => 'El elemento Ds_Terminal tiene una longitud incorrecta en el XML-String recibido',
        'XML0011' => 'El elemento Ds_Terminal no tiene formato numérico en el XML-String recibido',
        'XML0012' => 'No existe el elemento Ds_Order en el XML-String recibido',
        'XML0013' => 'El elemento Ds_Order viene vacío en el XML-String recibido',
        'XML0014' => 'El elemento Ds_Order tiene una longitud incorrecta en el XML-String recibido',
        'XML0015' => 'El elemento Ds_Order no tiene sus 4 primeras posiciones numéricas en el XML-String recibido',
        'XML0016' => 'No existe el elemento Ds_TransactionType en el XML-String recibido',
        'XML0017' => 'El elemento Ds_TransactionType viene vacío en el XML-String recibido',
        'XML0018' => 'El elemento Ds_TransactionType tiene una longitud incorrecta en el XML-String recibido',
        'XML0019' => 'El elemento Ds_TransactionType no tiene formato numérico en el XML-String recibido',
        'XML0020' => 'El elemento Ds_TransactionType tiene un valor desconocido o inválido en un mensaje Transaction',
        'XML0021' => 'No existe el elemento Signature en el XML-String recibido',
        'XML0022' => 'El elemento Signature viene vacío en el XML-String recibido',
        'XML0023' => 'La firma no es correcta',
        'XML0024' => 'No existen operaciones para los datos solicitados',
        'XML0025' => 'El XML de respuesta está mal formado',
        'XML0026' => 'No existe el elemento Ds_fecha_inicio en el XML-String recibido',
        'XML0027' => 'No existe el elemento Ds_fecha_fin en el XML-String recibido',
        'XML0028' => 'El comercio-terminal está dado de baja',
        'XML0029' => 'El elemento SignatureVersion viene vacío en el XML-String recibido',
        'XML0030' => 'El elemento "SignatureVersion" viene con un valor erróneo en el XML-String recibido',
    ];

    /**
     * Obtain an array with codes and info about these error codes.
     *
     * @return array
     *   Error codes.
     */
    public static function getErrorCodesInfo()
    {
       return self::ERROR_CODES;
    }

    /**
     * Returns error info from code.
     *
     * @param string $code
     *   Code identifier.
     *
     * @return array
     *   Array key code, value code info.
     */
    public static function getErrorInfo($code)
    {
      return self::ERROR_CODES[$code]?:'';
    }

}
