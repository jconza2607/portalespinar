import Link from "next/link";

export default function CallAction() {
  return (
    <>
      <section className="call-action overlay">
        <div className="container">
          <div className="row">
            <div className="col-lg-12 col-md-12 col-12">
              <div className="content">
                <h2>Atención a la Ciudadanía</h2>
                <p>
                ¿Tienes una solicitud o reclamo? Comunícate con nuestra Plataforma de Atención al Ciudadano.<br />
                📍 Acércate o llama al (084) 452130<br />
                🕐 Lunes a viernes de 8:00 a.m. a 4:00 p.m.
                </p>
                <div className="button">
                  <Link href="/contact" className="btn">
                    Contact Now
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}
