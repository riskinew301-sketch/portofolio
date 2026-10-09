import { HeroSection } from "@/components/sections/HeroSection";
import { AboutSection } from "@/components/sections/AboutSection";
import { MilestonesSection } from "@/components/sections/MilestonesSection";
import { FeaturesCards } from "@/components/ui/feature-shader-cards";

export default function HomePage() {
  return (
    <div className="w-full flex flex-col">
      <HeroSection />
      <AboutSection />
      <MilestonesSection />
      <FeaturesCards />
    </div>
  );
}
