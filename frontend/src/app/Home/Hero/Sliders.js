"use client";

import { useEffect, useState } from "react";
import { Swiper, SwiperSlide } from "swiper/react";
import { Navigation, Autoplay } from "swiper/modules";

import HeroBg1 from "../../../../public/img/th.jpg";
import HeroBg2 from "../../../../public/img/th1.jpg";
import HeroBg3 from "../../../../public/img/slider3.jpg";

export default function Sliders(props) {
  const { sectionName } = props;

  const [heroSliders, setheroSliders] = useState([
    {
      id: "slider1",
      bgImg: HeroBg1,
      title: "Sitio en <span>construcción</span>",
      subTitle:
        "Estamos trabajando para brindarte una mejor experiencia. <br/> en 5 segundos serás redireccionado a nuestro portal oficial.",
      button: {
        text: "Ir a gob.pe",
        link: "https://www.gob.pe/muniespinar",
      },
      button2: {
        text: "Ir a gob.pe",
        link: "https://www.gob.pe/muniespinar",
      },
    },
    {
      id: "slider2",
      bgImg: HeroBg2,
      title:
        "We Provide <span>Medical</span> Services <br/> That You Can <span>Trust!</span>",
      subTitle:
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque,<br/>faucibus libero eu, gravida quam. ",
      button: {
        text: "Get Appointment",
        link: "/appoinment",
      },
      button2: {
        text: "About Us",
        link: "/about",
      },
    },
    {
      id: "slider3",
      bgImg: HeroBg3,
      title:
        "We Provide <span>Medical</span> Services <br/> That You Can <span>Trust!</span>",
      subTitle:
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque,<br/>faucibus libero eu, gravida quam. ",
      button: {
        text: "Get Appointment",
        link: "/appoinment",
      },
      button2: {
        text: "Contact Now",
        link: "/contact",
      },
    },
  ]);

  // 👉 Redirección automática a los 5 segundos
  useEffect(() => {
    const timer = setTimeout(() => {
      window.location.href = "https://www.gob.pe/muniespinar";
    }, 5000);
    return () => clearTimeout(timer);
  }, []);

  return (
    <section className={sectionName ? sectionName : "slider"}>
      <Swiper
        modules={[Navigation, Autoplay]}
        navigation={{
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        }}
        className="hero-slider"
      >
        {heroSliders.map((singleSlider) => (
          <SwiperSlide
            className="single-slider"
            style={{
              backgroundImage: `url(${singleSlider.bgImg.src})`,
            }}
            key={singleSlider.id}
          >
            <div className="container">
              <div className="row">
                <div className="col-lg-7 col-12">
                  <div className="text">
                    <h1
                      dangerouslySetInnerHTML={{ __html: singleSlider.title }}
                      className="text-white"
                    ></h1>
                    <p
                      dangerouslySetInnerHTML={{ __html: singleSlider.subTitle }}
                      className="text-white"
                    ></p>
                    <div className="button">
                      <a href={singleSlider?.button.link} className="btn">
                        {singleSlider?.button.text}
                      </a>
                      <a
                        href={singleSlider?.button2.link}
                        className="btn primary"
                      >
                        {singleSlider?.button2.text}
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </SwiperSlide>
        ))}
      </Swiper>
      <div className="swiper-button-next"></div>
      <div className="swiper-button-prev"></div>
    </section>
  );
}
