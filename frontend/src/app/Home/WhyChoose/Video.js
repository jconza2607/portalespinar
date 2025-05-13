"use client";

import { useState } from "react";

import ModalVideo from "react-modal-video";

export default function Video() {
  const [isOpen, setOpen] = useState(false);

  return (
    <>
      <a onClick={() => setOpen(true)} className="video video-popup mfp-iframe">
        <i className="fa fa-play"></i>
      </a>

      <ModalVideo
        channel="youtube"
        autoplay
        isOpen={isOpen}
        videoId="5RHwzHPR52c"
        onClose={() => setOpen(false)}
      />
    </>
  );
}
