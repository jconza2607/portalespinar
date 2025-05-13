import SectionHead from "@/components/SectionHead";
import TeamCard from "@/components/TeamCard";

import SectionImg from "../../../../public/img/section-img2.png";

import TeamImg1 from "../../../../public/img/alcalde.jpg";
import TeamImg2 from "../../../../public/img/JulioMollohuanca.jpg";
import TeamImg3 from "../../../../public/img/marlenyNifla.jpg";
import TeamImg4 from "../../../../public/img/apolonariopfacsi.jpg";

export default function Team() {
  return (
    <>
      <section id="team" className="team section overlay">
        <div className="container">
          <div className="row">
            <div className="col-lg-12">
              <SectionHead
                img={SectionImg}
                title="Nuestras Autoridades"
                desc="Conoce al equipo que lidera la gestión municipal en favor del desarrollo de Espinar"
              />
            </div>
          </div>
          <div className="row">
            <div className="col-lg-3 col-md-6 col-12">
              <TeamCard
                image={TeamImg1}
                name="CLUDY ROSMERY LAGUNA CCAPA"
                designation="Alcalde"
              />
            </div>
            <div className="col-lg-3 col-md-6 col-12 ">
              <TeamCard
                image={TeamImg2}
                name="JULIO CONSTANTINO MOLLOHUANCA CRUZ"
                designation="Regidor"
              />
            </div>
            <div className="col-lg-3 col-md-6 col-12 ">
              <TeamCard
                image={TeamImg3}
                name="MARLENY NIFLA LLASA"
                designation="REGIDOR"
              />
            </div>
            <div className="col-lg-3 col-md-6 col-12">
              <TeamCard
                image={TeamImg4}
                name="APOLINARIO PFACSI HUILLCA"
                designation="REGIDOR"
              />
            </div>
          </div>
        </div>
      </section>
    </>
  );
}
