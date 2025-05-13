import FeatureCard from "@/components/FeatureCard";
import SectionHead from "@/components/SectionHead";

export default function Features(props) {
  const { sectionName } = props;

  return (
    <>
      <section className={sectionName ? sectionName : "Feautes section"}>
        <div className="container">
          <div className="row">
            <div className="col-lg-12">
              <SectionHead
                title="Protección y vigilancia Comunitaria"
                desc="Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts"
              />
            </div>
          </div>
          <div className="row">
            <div className="col-lg-4 col-12">
              <FeatureCard
                cardClass="single-features"
                icon="icofont icofont-ui-call"
                title="Llamado de emergencia"
                desc="Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate."
              />
            </div>
            <div className="col-lg-4 col-12">
              <FeatureCard
                cardClass="single-features"
                icon="icofont icofont-police-car"
                title="Patrullaje integrado"
                desc="Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam
                vulputate."
              />
            </div>
            <div className="col-lg-4 col-12">
              <FeatureCard
                cardClass="single-features last"
                icon="icofont icofont-people"
                title="Respuesta ante delitos o emergencias"
                desc="Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam
                vulputate."
              />
            </div>
          </div>
        </div>
      </section>
    </>
  );
}
