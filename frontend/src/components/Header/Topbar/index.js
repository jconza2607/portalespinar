import Image from "next/image";
import Link from "next/link";

// Theme Logo
import ThemeLogopte from "../../../../public/img/pte-logo.png";

export default function Topbar() {
  return (
    <>
      <div className="topbar">
        <div className="container">
          <div className="row">
            <div className="col-lg-6 col-md-5 col-12">
              <ul className="top-link">
                
              </ul>
            </div>
            <div className="col-lg-12 col-md-7 col-12">
              <ul className="top-contact">
                <li>
                  <i className="fa fa-phone"></i>+51 998 414 139
                </li>
                <li>
                  <i className="fa fa-envelope"></i>
                  <Link href="mailto:informatica@yourmail.com">
                  mesapartesvirtual@muniespinar.gob.pe
                  </Link>
                </li>
                <li>
                <Link href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=11811" target="_blank" rel="noopener noreferrer">
                  <Image src={ThemeLogopte} alt="#" width={75} height={54} />
                </Link>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}
