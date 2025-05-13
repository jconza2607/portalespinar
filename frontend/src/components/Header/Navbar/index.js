"use client";

import Link from "next/link";
import { usePathname } from "next/navigation";

export default function Navbar() {
  const pathname = usePathname();

  return (
    <>
      <div className="main-menu">
        <nav className="navigation">
          <ul className="nav menu">
            <li>
              <Link href="/">
                Home <i className="icofont-rounded"></i>
              </Link>              
            </li>
            <li>
              <Link href="#">
                Municipalidad <i className="icofont-rounded-down"></i>
              </Link>
              <ul className="dropdown">
                <li>
                  <Link
                    className={` ${pathname === "/doctors" ? "active" : ""}`}
                    href="/doctors"
                  >
                    Misión y Vision
                  </Link>
                </li>
                <li>
                  <Link
                    className={` ${
                      pathname === "/doctor-details" ? "active" : ""
                    }`}
                    href="/doctor-details"
                  >
                    Directorio Telefónico
                  </Link>
                </li>
                <li>
                  <Link
                    className={` ${
                      pathname === "/orgamigrama" ? "active" : ""
                    }`}
                    href="/organigrama"
                  >
                    Organigrama
                  </Link>
                </li>
                <li>
                  <Link
                    className={` ${
                      pathname === "/doc-gestion" ? "active" : ""
                    }`}
                    href="/doc-gestion"
                  >
                    Documentos de Gestión
                  </Link>
                </li>
                <li>
                  <Link
                    className={` ${
                      pathname === "/doc-gestion" ? "active" : ""
                    }`}
                    href="/doc-gestion"
                  >
                    Normas Emitidas
                  </Link>
                </li>
              </ul>
            </li>
            <li>
              <Link href="#">
                Gerencia <i className="icofont-rounded-down"></i>
              </Link>
              <ul className="dropdown">
                <li>
                  <Link
                    className={` ${pathname === "/service" ? "active" : ""}`}
                    href="/service"
                  >
                    Service
                  </Link>
                </li>
                <li>
                  <Link
                    className={` ${
                      pathname === "/service-details" ? "active" : ""
                    }`}
                    href="/service-details"
                  >
                    Service Details
                  </Link>
                </li>
              </ul>
            </li>
            <li>
              <Link href="#">
                Enlaces de interés <i className="icofont-rounded-down"></i>
              </Link>
              <ul className="dropdown">
                <li>
                  <Link
                    className={` ${pathname === "/about" ? "active" : ""}`}
                    href="/about"
                  >
                    About Us
                  </Link>
                </li>
                <li>
                  <Link
                    className={` ${
                      pathname === "/appointment" ? "active" : ""
                    }`}
                    href="/appointment"
                  >
                    Appointment
                  </Link>
                </li>
                <li>
                  <Link
                    className={` ${pathname === "/time-table" ? "active" : ""}`}
                    href="/time-table"
                  >
                    Time Table
                  </Link>
                </li>
                <li>
                  <Link
                    className={` ${
                      pathname === "/testimonials" ? "active" : ""
                    }`}
                    href="/testimonials"
                  >
                    Testimonials
                  </Link>
                </li>
                <li>
                  <Link
                    className={` ${pathname === "/pricing" ? "active" : ""}`}
                    href="/pricing"
                  >
                    Our Pricing
                  </Link>
                </li>
                <li>
                  <Link
                    className={` ${pathname === "/register" ? "active" : ""}`}
                    href="/register"
                  >
                    Sign Up
                  </Link>
                </li>
                <li>
                  <Link
                    className={` ${pathname === "/login" ? "active" : ""}`}
                    href="/login"
                  >
                    Login
                  </Link>
                </li>
                <li>
                  <Link
                    className={` ${pathname === "/faq" ? "active" : ""}`}
                    href="/faq"
                  >
                    Faq
                  </Link>
                </li>
                <li>
                  <Link
                    className={` ${
                      pathname === "/mail-success" ? "active" : ""
                    }`}
                    href="/mail-success"
                  >
                    Mail Success
                  </Link>
                </li>
                <li>
                  <Link
                    className={` ${pathname === "/404" ? "active" : ""}`}
                    href="/404"
                  >
                    404 Error
                  </Link>
                </li>
              </ul>
            </li>            
          </ul>
        </nav>
      </div>
    </>
  );
}
