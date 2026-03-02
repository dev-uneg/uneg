<?php
$title = 'Aviso de Privacidad | UNEG';
$active = '';
require __DIR__ . '/partials/header.php';
?>

<main class="mx-auto max-w-5xl px-4 py-12">
  <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-10">
    <h1 class="text-2xl font-semibold text-[#0b2c65] sm:text-3xl">Aviso de Privacidad</h1>
    <p class="mt-3 text-sm text-slate-600">
      Última actualización: <?php echo date('d/m/Y'); ?>
    </p>

    <div class="prose prose-slate mt-6 max-w-none text-sm leading-6">
      <p>
        Universidad de Negocios ISEC (en adelante, "UNEG"), con domicilio en Mier y Pesado 227,
        Col. Del Valle Centro, C.P. 03100, Benito Juárez, Ciudad de México, es responsable del
        tratamiento de sus datos personales conforme a este aviso.
      </p>

      <h2>1. Datos personales que recabamos</h2>
      <p>Podemos recabar, de manera enunciativa mas no limitativa, los siguientes datos:</p>
      <ul>
        <li>Datos de identificación: nombre completo.</li>
        <li>Datos de contacto: correo electrónico, teléfono.</li>
        <li>Datos académicos y de interés: programa educativo de interés, comentarios y mensajes.</li>
        <li>Datos técnicos de navegación: dirección IP, navegador, sistema operativo, fecha y hora de acceso, cookies y tecnologías similares.</li>
      </ul>

      <h2>2. Finalidades del tratamiento</h2>
      <p>Sus datos se utilizarán para las siguientes finalidades primarias:</p>
      <ul>
        <li>Atender solicitudes de información, contacto y seguimiento académico/comercial.</li>
        <li>Dar seguimiento a procesos de admisión, inscripción y servicios relacionados.</li>
        <li>Registrar y administrar prospectos, alumnos, egresados y usuarios de formularios.</li>
        <li>Proveer atención por medios digitales, telefónicos o presenciales.</li>
      </ul>
      <p>Adicionalmente, podremos usar sus datos para finalidades secundarias:</p>
      <ul>
        <li>Enviar información institucional, invitaciones, eventos, promociones y contenidos informativos.</li>
        <li>Realizar análisis estadístico y mejora de nuestros servicios y experiencia de usuario.</li>
      </ul>

      <h2>3. Transferencias de datos</h2>
      <p>
        UNEG podrá transferir datos personales a proveedores que apoyan en la operación del sitio y en la
        gestión de contactos (por ejemplo, plataformas tecnológicas de atención, almacenamiento y CRM),
        únicamente para cumplir las finalidades señaladas y bajo obligaciones de confidencialidad.
      </p>
      <p>
        También podrá realizar transferencias cuando sean necesarias para cumplir obligaciones legales
        o requerimientos de autoridad competente.
      </p>

      <h2>4. Derechos ARCO y revocación del consentimiento</h2>
      <p>
        Usted puede ejercer sus derechos de Acceso, Rectificación, Cancelación u Oposición (ARCO), así como
        revocar su consentimiento para el tratamiento de sus datos personales, mediante solicitud al correo:
        <a href="mailto:admisiones@uneg.edu.mx">admisiones@uneg.edu.mx</a>.
      </p>
      <p>
        La solicitud deberá incluir, al menos: nombre completo, medio de contacto, descripción clara del derecho
        que desea ejercer y documentos que acrediten su identidad o representación legal, cuando corresponda.
      </p>

      <h2>5. Limitación del uso o divulgación</h2>
      <p>
        Usted puede solicitar la limitación del uso de sus datos para fines promocionales enviando un correo
        a la dirección indicada en este aviso.
      </p>

      <h2>6. Uso de cookies y tecnologías similares</h2>
      <p>
        Nuestro sitio puede utilizar cookies, balizas web y tecnologías similares para fines de seguridad,
        funcionamiento, análisis y mejora de experiencia. Puede configurar su navegador para rechazar o eliminar
        cookies; sin embargo, algunas funciones del sitio podrían verse afectadas.
      </p>

      <h2>7. Medidas de seguridad y conservación</h2>
      <p>
        UNEG adopta medidas administrativas, técnicas y físicas razonables para proteger sus datos personales
        contra daño, pérdida, alteración, destrucción o acceso no autorizado. Los datos se conservarán durante
        el tiempo necesario para cumplir las finalidades descritas y obligaciones legales aplicables.
      </p>

      <h2>8. Datos de menores de edad</h2>
      <p>
        En caso de que se recaben datos de menores de edad, el tratamiento se realizará con el consentimiento
        de madre, padre o tutor, conforme a la normativa aplicable.
      </p>

      <h2>9. Cambios al aviso de privacidad</h2>
      <p>
        UNEG podrá actualizar este aviso en cualquier momento. Las modificaciones estarán disponibles en esta
        misma página: <a href="<?php echo $base; ?>/aviso-de-privacidad"><?php echo $base; ?>/aviso-de-privacidad</a>.
      </p>

      <h2>10. Contacto</h2>
      <p>
        Si tiene dudas sobre este aviso, puede contactarnos en
        <a href="mailto:admisiones@uneg.edu.mx">admisiones@uneg.edu.mx</a> o al teléfono 55 5063 1300.
      </p>
    </div>
  </section>
</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
