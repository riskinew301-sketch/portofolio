"use client";

import React from "react";
import Link from "next/link";
import { ArrowUpRight } from "lucide-react";
import { siteContent } from "@/data/content";
import { ProjectCard } from "@/components/ui/ProjectCard";

export const FeaturedProjectsSection: React.FC = () => {
  return (
    <section className="w-full border-b border-zinc-800 bg-zinc-950 py-24 px-6">
      <div className="max-w-6xl mx-auto space-y-12">
        {/* Header */}
        <div className="flex flex-col sm:flex-row sm:items-end justify-between gap-6">
          <div>
            <div className="flex items-center gap-2 text-xs font-mono uppercase tracking-widest text-neon mb-3">
              <span className="w-2 h-2 bg-neon" />
              <span>03 // CORE WORK & SYSTEMS</span>
            </div>
            <h2 className="font-mono text-3xl sm:text-4xl font-bold text-zinc-100">
              Featured Case Studies
            </h2>
          </div>

          <Link
            href="/projects"
            className="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-widest text-neon hover:underline"
          >
            <span>View Complete Archive →</span>
          </Link>
        </div>

        {/* Project Cards Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
          {siteContent.projects.map((project) => (
            <ProjectCard key={project.slug} project={project} />
          ))}
        </div>
      </div>
    </section>
  );
};
