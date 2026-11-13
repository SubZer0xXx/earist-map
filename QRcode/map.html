<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes" />
  <title>EARIST Cavite Campus — School Navigation System</title>
  <link rel="icon" type="image/png" href="assets/earist-logo.png?v=2" />
  <style>
    :root {
      --maroon-dark: #4a0e12;
      --maroon: #631418;
      --maroon-light: #7c1d22;
      --gold: #d97706;
      --gold-soft: #fef3c7;
      --cream: #f5f2eb;
      --card-bg: #ffffff;
      --text-main: #1f1b1c;
      --text-muted: #645d5e;
      --border: #e6dfd5;
      --blue: #1d4ed8;
      --blue-soft: #dbeafe;
      --green: #15803d;
      --green-soft: #dcfce7;
      --red: #dc2626;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      -webkit-tap-highlight-color: transparent;
      scrollbar-width: none;
      -ms-overflow-style: none;
    }

    *::-webkit-scrollbar {
      display: none;
      width: 0;
      height: 0;
    }

    html, body {
      width: 100%;
      max-width: 100%;
      overflow-x: hidden;
      overflow-y: auto;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      background: var(--cream);
      color: var(--text-main);
      min-height: 100vh;
    }

    body {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .app-shell {
      width: 100%;
      max-width: 560px;
      min-height: 100vh;
      background: var(--card-bg);
      display: flex;
      flex-direction: column;
      box-shadow: 0 0 32px rgba(0, 0, 0, 0.08);
    }

    /* Header */
    .header {
      background: linear-gradient(120deg, var(--maroon-dark) 0%, var(--maroon) 65%, var(--maroon-light) 100%);
      color: #fff;
      padding: 12px 14px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
      position: sticky;
      top: 0;
      z-index: 40;
      box-shadow: 0 2px 10px rgba(74, 14, 18, 0.25);
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 10px;
      min-width: 0;
    }

    .brand img {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: #fff;
      padding: 2px;
      flex-shrink: 0;
    }

    .brand-text {
      min-width: 0;
    }

    .brand-text h1 {
      font-size: 0.92rem;
      font-weight: 800;
      letter-spacing: 0.02em;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .brand-text p {
      font-size: 0.72rem;
      color: rgba(255, 255, 255, 0.85);
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .qr-link-btn {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      background: rgba(255, 255, 255, 0.16);
      color: #fff;
      text-decoration: none;
      font-size: 0.75rem;
      font-weight: 700;
      padding: 7px 10px;
      border-radius: 999px;
      border: 1px solid rgba(255, 255, 255, 0.28);
      flex-shrink: 0;
      transition: background 0.15s ease;
    }

    .qr-link-btn:hover {
      background: rgba(255, 255, 255, 0.28);
    }

    /* Search Bar */
    .search-wrap {
      padding: 10px 14px 6px;
      position: relative;
      z-index: 35;
      background: var(--card-bg);
    }

    .search-box {
      display: flex;
      align-items: center;
      gap: 8px;
      background: #f6f4f0;
      border: 1.5px solid var(--border);
      border-radius: 12px;
      padding: 8px 12px;
      transition: border-color 0.15s ease, background 0.15s ease;
    }

    .search-box:focus-within {
      border-color: var(--maroon);
      background: #fff;
      box-shadow: 0 0 0 3px rgba(99, 20, 24, 0.1);
    }

    .search-box input {
      border: none;
      background: transparent;
      outline: none;
      width: 100%;
      font-size: 0.88rem;
      color: var(--text-main);
    }

    .search-clear {
      display: none;
      border: none;
      background: #e2dcd3;
      color: var(--text-main);
      width: 22px;
      height: 22px;
      border-radius: 50%;
      font-size: 0.78rem;
      cursor: pointer;
      flex-shrink: 0;
    }

    .search-clear.show {
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }

    .search-results {
      display: none;
      position: absolute;
      left: 14px;
      right: 14px;
      top: calc(100% - 2px);
      background: #fff;
      border: 1.5px solid var(--border);
      border-radius: 12px;
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.14);
      max-height: 280px;
      overflow-y: auto;
      z-index: 50;
    }

    .search-results.open {
      display: block;
    }

    .search-item {
      width: 100%;
      text-align: left;
      background: none;
      border: none;
      border-bottom: 1px solid #f2eee8;
      padding: 10px 12px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
      cursor: pointer;
    }

    .search-item:last-child {
      border-bottom: none;
    }

    .search-item:hover {
      background: #faf7f2;
    }

    .search-item-title {
      font-size: 0.86rem;
      font-weight: 700;
      color: var(--text-main);
    }

    .search-item-sub {
      font-size: 0.74rem;
      color: var(--text-muted);
      margin-top: 2px;
    }

    .search-item-badge {
      font-size: 0.7rem;
      font-weight: 800;
      color: var(--maroon);
      background: #fdf2f2;
      border: 1px solid #f3d2d4;
      padding: 3px 8px;
      border-radius: 999px;
      white-space: nowrap;
      flex-shrink: 0;
    }

    /* Flow Stepper */
    .flow-bar {
      display: flex;
      align-items: center;
      gap: 4px;
      padding: 6px 14px 10px;
      overflow-x: auto;
      font-size: 0.73rem;
      border-bottom: 1px solid var(--border);
      background: var(--card-bg);
    }

    .flow-step {
      display: inline-flex;
      align-items: center;
      gap: 4px;
      padding: 4px 8px;
      border-radius: 999px;
      border: 1px solid transparent;
      background: #f4f1ea;
      color: var(--text-muted);
      font-weight: 600;
      cursor: pointer;
      white-space: nowrap;
      transition: all 0.15s ease;
    }

    .flow-step.done {
      background: #fdf2f2;
      color: var(--maroon);
      border-color: #eed4d6;
    }

    .flow-step.active {
      background: var(--maroon);
      color: #fff;
      font-weight: 700;
    }

    .flow-sep {
      color: #b4aba0;
      font-weight: 700;
      flex-shrink: 0;
    }

    /* Controls Section: Building + Floor */
    .controls-section {
      padding: 10px 14px;
      background: #fbfaf7;
      border-bottom: 1px solid var(--border);
      display: flex;
      flex-direction: column;
      gap: 8px;
    }

    .building-row {
      display: grid;
      grid-template-columns: auto 1fr 1fr;
      gap: 7px;
    }

    .bldg-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      padding: 9px 10px;
      border-radius: 10px;
      border: 1.5px solid var(--border);
      background: #fff;
      color: var(--text-main);
      font-size: 0.8rem;
      font-weight: 700;
      cursor: pointer;
      transition: all 0.15s ease;
      text-align: center;
    }

    .bldg-btn:hover {
      border-color: var(--maroon);
    }

    .bldg-btn.active {
      background: var(--maroon);
      color: #fff;
      border-color: var(--maroon);
      box-shadow: 0 3px 10px rgba(99, 20, 24, 0.25);
    }

    .floor-row {
      display: none;
      grid-template-columns: repeat(3, 1fr);
      gap: 7px;
    }

    .floor-row.show {
      display: grid;
    }

    .floor-btn {
      padding: 8px 6px;
      border-radius: 9px;
      border: 1.5px solid var(--border);
      background: #fff;
      color: var(--text-main);
      font-size: 0.77rem;
      font-weight: 700;
      cursor: pointer;
      transition: all 0.15s ease;
      text-align: center;
    }

    .floor-btn span {
      display: block;
      font-size: 0.66rem;
      font-weight: 500;
      color: var(--text-muted);
      margin-top: 1px;
    }

    .floor-btn.active {
      background: var(--gold-soft);
      border-color: var(--gold);
      color: #78350f;
      box-shadow: 0 2px 8px rgba(217, 119, 6, 0.2);
    }

    .floor-btn.active span {
      color: #92400e;
    }

    /* Interactive Map Viewport */
    .map-section {
      padding: 10px 14px 6px;
      background: var(--card-bg);
    }

    .map-header-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 8px;
      margin-bottom: 6px;
    }

    .map-title {
      font-size: 0.84rem;
      font-weight: 800;
      color: var(--maroon-dark);
    }

    .map-subtitle {
      font-size: 0.72rem;
      color: var(--text-muted);
    }

    .map-stage {
      position: relative;
      width: 100%;
      aspect-ratio: 732 / 616;
      background: #f3efe7;
      border: 1.5px solid var(--border);
      border-radius: 14px;
      overflow: hidden;
      touch-action: none;
      cursor: grab;
      user-select: none;
    }

    .map-stage.dragging {
      cursor: grabbing;
    }

    .map-transform {
      position: relative;
      width: 100%;
      height: 100%;
      transform-origin: center center;
      transition: transform 0.12s ease-out;
    }

    .map-stage.dragging .map-transform {
      transition: none;
    }

    .map-image {
      width: 100%;
      height: 100%;
      object-fit: contain;
      display: block;
      pointer-events: none;
    }

    .svg-floor-wrap {
      display: none;
      width: 100%;
      height: 100%;
      background: #ffffff;
    }

    .svg-floor-wrap.show {
      display: block;
    }

    .map-overlay {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      pointer-events: auto;
    }

    /* Zoom Controls */
    .zoom-controls {
      position: absolute;
      right: 10px;
      bottom: 10px;
      display: flex;
      flex-direction: column;
      gap: 5px;
      z-index: 20;
    }

    .zoom-btn {
      width: 34px;
      height: 34px;
      border-radius: 9px;
      border: 1px solid rgba(0, 0, 0, 0.12);
      background: rgba(255, 255, 255, 0.94);
      color: var(--text-main);
      font-size: 1rem;
      font-weight: 800;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.14);
    }

    .zoom-btn:hover {
      background: #fff;
      color: var(--maroon);
    }

    /* Interactive Hotspots & Highlights */
    .building-hotspot {
      fill: rgba(99, 20, 24, 0.08);
      stroke: rgba(99, 20, 24, 0.45);
      stroke-width: 2.5;
      stroke-dasharray: 6 4;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .building-hotspot:hover {
      fill: rgba(99, 20, 24, 0.18);
      stroke: var(--maroon);
      stroke-width: 3.5;
    }

    .building-hotspot.selected {
      fill: rgba(217, 119, 6, 0.22);
      stroke: var(--gold);
      stroke-width: 4.5;
      stroke-dasharray: none;
    }

    .room-hotspot {
      fill: rgba(29, 78, 216, 0.08);
      stroke: rgba(29, 78, 216, 0.45);
      stroke-width: 2;
      cursor: pointer;
      transition: all 0.18s ease;
    }

    .room-hotspot:hover {
      fill: rgba(29, 78, 216, 0.2);
      stroke: var(--blue);
      stroke-width: 3;
    }

    .room-hotspot.selected {
      fill: rgba(217, 119, 6, 0.3);
      stroke: #b45309;
      stroke-width: 4.5;
    }

    .pulse-ring {
      animation: pulseRing 1.5s infinite ease-out;
      transform-origin: center;
    }

    @keyframes pulseRing {
      0% { opacity: 0.85; r: 10; }
      100% { opacity: 0; r: 30; }
    }

    .route-line {
      fill: none;
      stroke: var(--blue);
      stroke-width: 5;
      stroke-linecap: round;
      stroke-linejoin: round;
      stroke-dasharray: 10 8;
      animation: dashFlow 1s linear infinite;
    }

    @keyframes dashFlow {
      to { stroke-dashoffset: -18; }
    }

    /* Selected Info Card */
    .selected-card {
      display: none;
      margin: 8px 14px 4px;
      padding: 12px 14px;
      border-radius: 12px;
      background: linear-gradient(135deg, #fffbeb 0%, #fef3c7 100%);
      border: 1.5px solid #f59e0b;
      box-shadow: 0 3px 12px rgba(217, 119, 6, 0.14);
    }

    .selected-card.show {
      display: block;
    }

    .selected-card-top {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 10px;
    }

    .room-code-pill {
      display: inline-block;
      background: var(--maroon);
      color: #fff;
      font-size: 0.72rem;
      font-weight: 800;
      padding: 3px 9px;
      border-radius: 999px;
      margin-bottom: 4px;
    }

    .selected-card h2 {
      font-size: 0.96rem;
      font-weight: 800;
      color: #451a03;
    }

    .selected-card p {
      font-size: 0.77rem;
      color: #78350f;
      margin-top: 3px;
    }

    .selected-card-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 7px;
      margin-top: 10px;
    }

    .action-btn {
      border: none;
      border-radius: 8px;
      padding: 7px 11px;
      font-size: 0.76rem;
      font-weight: 700;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    .action-btn-primary {
      background: var(--maroon);
      color: #fff;
    }

    .action-btn-secondary {
      background: #fff;
      color: var(--maroon);
      border: 1px solid #d6b2b5;
    }

    /* Directory / Room List */
    .directory-section {
      padding: 10px 14px 20px;
      flex: 1;
    }

    .directory-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 8px;
    }

    .directory-header h3 {
      font-size: 0.84rem;
      font-weight: 800;
      color: var(--text-main);
    }

    .directory-count {
      font-size: 0.72rem;
      color: var(--text-muted);
      font-weight: 600;
    }

    /* Vicinity Building Cards */
    .vicinity-cards {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 10px;
    }

    .vicinity-card {
      border: 1.5px solid var(--border);
      border-radius: 12px;
      padding: 12px;
      background: #fff;
      text-align: left;
      cursor: pointer;
      transition: all 0.15s ease;
    }

    .vicinity-card:hover {
      border-color: var(--maroon);
      transform: translateY(-1px);
      box-shadow: 0 4px 12px rgba(99, 20, 24, 0.1);
    }

    .vicinity-card.active {
      border-color: var(--gold);
      background: #fffbeb;
    }

    .vicinity-card .v-icon {
      font-size: 1.35rem;
      margin-bottom: 5px;
    }

    .vicinity-card .v-title {
      font-size: 0.86rem;
      font-weight: 800;
      color: var(--maroon-dark);
    }

    .vicinity-card .v-sub {
      font-size: 0.72rem;
      color: var(--text-muted);
      margin-top: 3px;
      line-height: 1.35;
    }

    .vicinity-card .v-cta {
      display: inline-block;
      margin-top: 8px;
      font-size: 0.73rem;
      font-weight: 700;
      color: var(--maroon);
    }

    /* Room List Grid */
    .room-list {
      display: flex;
      flex-direction: column;
      gap: 7px;
    }

    .room-card {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
      width: 100%;
      text-align: left;
      padding: 10px 12px;
      border-radius: 11px;
      border: 1.5px solid var(--border);
      background: #fff;
      cursor: pointer;
      transition: all 0.15s ease;
    }

    .room-card:hover {
      border-color: var(--maroon);
      background: #fdfbfa;
    }

    .room-card.active {
      border-color: var(--gold);
      background: #fffbeb;
      box-shadow: 0 2px 10px rgba(217, 119, 6, 0.16);
    }

    .room-card-left {
      display: flex;
      align-items: center;
      gap: 10px;
      min-width: 0;
    }

    .room-num-box {
      min-width: 68px;
      padding: 5px 8px;
      border-radius: 8px;
      background: #f4f1ea;
      color: var(--maroon-dark);
      font-size: 0.73rem;
      font-weight: 800;
      text-align: center;
      flex-shrink: 0;
    }

    .room-card.active .room-num-box {
      background: var(--maroon);
      color: #fff;
    }

    .room-info {
      min-width: 0;
    }

    .room-name {
      font-size: 0.84rem;
      font-weight: 700;
      color: var(--text-main);
    }

    .room-loc {
      font-size: 0.72rem;
      color: var(--text-muted);
      margin-top: 2px;
    }

    .room-arrow {
      font-size: 0.76rem;
      font-weight: 700;
      color: var(--maroon);
      flex-shrink: 0;
    }

    @media (max-width: 400px) {
      .building-row {
        grid-template-columns: 1fr 1fr;
      }
      .bldg-btn[data-bldg="vicinity"] {
        grid-column: 1 / -1;
      }
      .vicinity-cards {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <div class="app-shell">
    <!-- Top Header -->
    <header class="header">
      <div class="brand">
        <img src="assets/earist-logo.png" alt="EARIST Seal" />
        <div class="brand-text">
          <h1>EARIST Cavite Campus</h1>
          <p>School Navigation System</p>
        </div>
      </div>
      <a class="qr-link-btn" href="index.html" title="Open QR Code Sign">📱 QR Code</a>
    </header>

    <!-- Search Bar -->
    <div class="search-wrap">
      <div class="search-box">
        <span>🔍</span>
        <input type="text" id="searchInput" placeholder="Search room number or name (e.g. MB 305, Registrar, Annex 101)..." autocomplete="off" />
        <button type="button" class="search-clear" id="searchClear" aria-label="Clear search">✕</button>
      </div>
      <div class="search-results" id="searchResults"></div>
    </div>

    <!-- Clear Navigation Flow Stepper -->
    <nav class="flow-bar" aria-label="Navigation Flow">
      <button type="button" class="flow-step active" id="stepVicinity">1. Vicinity Map</button>
      <span class="flow-sep">›</span>
      <button type="button" class="flow-step" id="stepBuilding">2. Building</button>
      <span class="flow-sep">›</span>
      <button type="button" class="flow-step" id="stepFloor">3. Floor</button>
      <span class="flow-sep">›</span>
      <button type="button" class="flow-step" id="stepRoom">4. Room</button>
    </nav>

    <!-- Building & Floor Switcher -->
    <section class="controls-section">
      <div class="building-row">
        <button type="button" class="bldg-btn active" data-bldg="vicinity">🗺️ Vicinity</button>
        <button type="button" class="bldg-btn" data-bldg="main">🏛️ Main Building</button>
        <button type="button" class="bldg-btn" data-bldg="annex">🏢 Annex Building</button>
      </div>
      <div class="floor-row" id="floorRow">
        <button type="button" class="floor-btn" data-floor="1f">1st Floor<span>Ground</span></button>
        <button type="button" class="floor-btn" data-floor="2f">2nd Floor<span>Middle</span></button>
        <button type="button" class="floor-btn" data-floor="3f">3rd Floor<span>Top</span></button>
      </div>
    </section>

    <!-- Interactive Map / Floor Plan Viewport -->
    <section class="map-section">
      <div class="map-header-bar">
        <div>
          <div class="map-title" id="mapTitle">School Vicinity Map</div>
          <div class="map-subtitle" id="mapSubtitle">Tap Main Building or Annex Building on the map to explore floors &amp; rooms</div>
        </div>
      </div>

      <div class="map-stage" id="mapStage">
        <div class="map-transform" id="mapTransform">
          <img src="assets/campus-map.png" alt="EARIST Campus Map" class="map-image" id="mapImage" />
          <div class="svg-floor-wrap" id="svgFloorWrap"></div>
          <svg class="map-overlay" id="mapOverlay" viewBox="0 0 732 616" preserveAspectRatio="xMidYMid meet"></svg>
        </div>

        <div class="zoom-controls">
          <button type="button" class="zoom-btn" id="zoomInBtn" title="Zoom In">+</button>
          <button type="button" class="zoom-btn" id="zoomOutBtn" title="Zoom Out">−</button>
          <button type="button" class="zoom-btn" id="zoomResetBtn" title="Reset View">↺</button>
        </div>
      </div>
    </section>

    <!-- Highlighted Room / Building Details Card -->
    <section class="selected-card" id="selectedCard">
      <div class="selected-card-top">
        <div>
          <span class="room-code-pill" id="selectedBadge">ROOM</span>
          <h2 id="selectedTitle">Room Name</h2>
          <p id="selectedLocation">Building • Floor • Wing</p>
        </div>
      </div>
      <div class="selected-card-actions" id="selectedActions"></div>
    </section>

    <!-- Directory List (Buildings on Vicinity, Rooms on Floor) -->
    <section class="directory-section">
      <div class="directory-header">
        <h3 id="directoryTitle">Select a Building to Begin</h3>
        <span class="directory-count" id="directoryCount">2 Buildings</span>
      </div>
      <div id="directoryBody"></div>
    </section>
  </div>

  <script>
    const BUILDINGS = {
      main: {
        id: "main",
        name: "Main Building",
        subtitle: "Hall A & Hall B • 3 Floors • Offices, Labs & Classrooms",
        vicinityHotspots: [
          { x: 242, y: 458, w: 416, h: 86 },
          { x: 642, y: 245, w: 72, h: 280 }
        ],
        pin: { x: 460, y: 500 },
        routeFromEntrance: [
          { x: 673, y: 538 },
          { x: 660, y: 447 },
          { x: 460, y: 447 },
          { x: 460, y: 500 }
        ],
        floors: {
          "1f": {
            id: "1f",
            label: "1st Floor (Ground)",
            type: "image",
            src: "assets/floor-main-1f.jpg",
            viewBox: "0 0 1024 617",
            aspect: "1024 / 617",
            rooms: [
              { number: "MB 101", name: "Classroom MB 101", location: "Main Building • 1st Floor • South Hallway", box: { x: 650, y: 468, w: 54, h: 56 } },
              { number: "MB 102", name: "Classroom MB 102", location: "Main Building • 1st Floor • South Hallway", box: { x: 708, y: 468, w: 56, h: 56 } },
              { number: "MB 103", name: "Classroom MB 103", location: "Main Building • 1st Floor • South Hallway", box: { x: 768, y: 468, w: 72, h: 56 } },
              { number: "MB 104", name: "Auto Diesel Shop", location: "Main Building • 1st Floor • East Wing (Hall B)", box: { x: 912, y: 315, w: 58, h: 66 } },
              { number: "MB 105", name: "Classroom MB 105", location: "Main Building • 1st Floor • East Wing (Hall B)", box: { x: 912, y: 245, w: 58, h: 66 } },
              { number: "MB RM 106", name: "Electrical Room", location: "Main Building • 1st Floor • East Wing (Hall B)", box: { x: 912, y: 170, w: 58, h: 72 } },
              { number: "MB R107", name: "Electronics Laboratory", location: "Main Building • 1st Floor • East Wing North", box: { x: 912, y: 80, w: 58, h: 86 } },
              { number: "ROTC", name: "ROTC Quarter", location: "Main Building • 1st Floor • West End (Hall A)", box: { x: 478, y: 440, w: 42, h: 32 } },
              { number: "T&B 1F", name: "Comfort Room (T&B)", location: "Main Building • 1st Floor • South Hallway", box: { x: 560, y: 482, w: 66, h: 46 } }
            ]
          },
          "2f": {
            id: "2f",
            label: "2nd Floor",
            type: "svg",
            viewBox: "0 0 1024 560",
            aspect: "1024 / 560",
            rooms: [
              { number: "ADMISSION", name: "Admission Office", location: "Main Building • 2nd Floor • West Wing (Hall A)", box: { x: 60, y: 360, w: 105, h: 95 } },
              { number: "ADMIN", name: "Admin Office", location: "Main Building • 2nd Floor • West Wing (Hall A)", box: { x: 170, y: 360, w: 95, h: 95 } },
              { number: "REGISTRAR", name: "Registrar Office", location: "Main Building • 2nd Floor • West-Central (Hall A)", box: { x: 270, y: 360, w: 110, h: 95 } },
              { number: "CONF", name: "Conference Room", location: "Main Building • 2nd Floor • Central Hall A", box: { x: 385, y: 360, w: 105, h: 95 } },
              { number: "MB 201", name: "Speech Laboratory", location: "Main Building • 2nd Floor • South Hallway (Hall A)", box: { x: 495, y: 360, w: 92, h: 95 } },
              { number: "MB 202", name: "Property Management", location: "Main Building • 2nd Floor • South Hallway (Hall A)", box: { x: 592, y: 360, w: 98, h: 95 } },
              { number: "MB 203", name: "Classroom MB 203", location: "Main Building • 2nd Floor • South Hallway (Hall A)", box: { x: 695, y: 360, w: 75, h: 95 } },
              { number: "MB 204", name: "Classroom MB 204", location: "Main Building • 2nd Floor • South Hallway (Hall A)", box: { x: 775, y: 360, w: 75, h: 95 } },
              { number: "MB 205", name: "Classroom MB 205", location: "Main Building • 2nd Floor • South-East Corner", box: { x: 855, y: 360, w: 75, h: 95 } },
              { number: "MB 206", name: "Classroom MB 206", location: "Main Building • 2nd Floor • East Wing (Hall B)", box: { x: 865, y: 278, w: 105, h: 52 } },
              { number: "MB 207", name: "Classroom MB 207", location: "Main Building • 2nd Floor • East Wing (Hall B)", box: { x: 865, y: 222, w: 105, h: 52 } },
              { number: "MB 208", name: "Food Tech Lab (MB 208)", location: "Main Building • 2nd Floor • East Wing (Hall B)", box: { x: 865, y: 166, w: 105, h: 52 } },
              { number: "MB 209", name: "Food Tech Lab (MB 209)", location: "Main Building • 2nd Floor • East Wing (Hall B)", box: { x: 865, y: 110, w: 105, h: 52 } },
              { number: "MB 210", name: "TLE Room (MB 210)", location: "Main Building • 2nd Floor • East Wing (Hall B)", box: { x: 865, y: 54, w: 105, h: 52 } },
              { number: "MB 211", name: "Drafting Room (MB 211)", location: "Main Building • 2nd Floor • East Wing North", box: { x: 750, y: 54, w: 110, h: 65 } }
            ]
          },
          "3f": {
            id: "3f",
            label: "3rd Floor",
            type: "image",
            src: "assets/floor-main-3f.jpg",
            viewBox: "0 0 1024 566",
            aspect: "1024 / 566",
            rooms: [
              { number: "LIB-UG", name: "Library (Undergraduate Prog.)", location: "Main Building • 3rd Floor • West Wing (Upper)", box: { x: 378, y: 345, w: 62, h: 56 } },
              { number: "LIB-GR", name: "Library (Graduate Prog.)", location: "Main Building • 3rd Floor • West Wing", box: { x: 378, y: 412, w: 62, h: 54 } },
              { number: "INET", name: "Internet Room", location: "Main Building • 3rd Floor • West Wing (Near Stairs)", box: { x: 340, y: 438, w: 38, h: 54 } },
              { number: "MB 301", name: "Graduate Office (MB 301)", location: "Main Building • 3rd Floor • South Hallway", box: { x: 442, y: 415, w: 56, h: 52 } },
              { number: "MB 302", name: "Computer Lab (MB 302)", location: "Main Building • 3rd Floor • South Hallway", box: { x: 500, y: 415, w: 56, h: 52 } },
              { number: "MB 303", name: "Computer Lab (MB 303)", location: "Main Building • 3rd Floor • South Hallway", box: { x: 558, y: 415, w: 58, h: 52 } },
              { number: "MPH 1", name: "Multi-Purpose Hall 1", location: "Main Building • 3rd Floor • South-East Hallway", box: { x: 644, y: 415, w: 56, h: 52 } },
              { number: "MPH 2", name: "Multi-Purpose Hall 2", location: "Main Building • 3rd Floor • South-East Hallway", box: { x: 702, y: 415, w: 56, h: 52 } },
              { number: "MPH 3", name: "Multi-Purpose Hall 3", location: "Main Building • 3rd Floor • South-East Hallway", box: { x: 760, y: 415, w: 60, h: 52 } },
              { number: "MB 304", name: "Criminology Lab (MB 304)", location: "Main Building • 3rd Floor • East Wing (Hall B)", box: { x: 930, y: 280, w: 62, h: 82 } },
              { number: "MB 305", name: "Forensic Lab (MB 305)", location: "Main Building • 3rd Floor • East Wing (Hall B)", box: { x: 930, y: 214, w: 62, h: 64 } },
              { number: "MB 306", name: "Biology Lab (MB 306)", location: "Main Building • 3rd Floor • East Wing (Hall B)", box: { x: 930, y: 148, w: 62, h: 64 } },
              { number: "MB 307", name: "Chemistry Lab (MB 307)", location: "Main Building • 3rd Floor • East Wing North", box: { x: 930, y: 78, w: 62, h: 68 } }
            ]
          }
        }
      },
      annex: {
        id: "annex",
        name: "Annex Building",
        subtitle: "West Wing • 3 Floors • OSA, Guidance, Annex Rooms & Canteen",
        vicinityHotspots: [
          { x: 245, y: 195, w: 54, h: 248 }
        ],
        pin: { x: 272, y: 318 },
        routeFromEntrance: [
          { x: 673, y: 538 },
          { x: 660, y: 447 },
          { x: 272, y: 447 },
          { x: 272, y: 318 }
        ],
        floors: {
          "1f": {
            id: "1f",
            label: "1st Floor (Ground)",
            type: "image",
            src: "assets/floor-annex-1f.jpg",
            viewBox: "0 0 1024 657",
            aspect: "1024 / 657",
            rooms: [
              { number: "T&B A1F", name: "Comfort Room (T&B)", location: "Annex Building • 1st Floor • West End", box: { x: 22, y: 30, w: 62, h: 112 } },
              { number: "OSA", name: "Office of Student Affairs (OSA)", location: "Annex Building • 1st Floor • West Wing", box: { x: 86, y: 30, w: 44, h: 112 } },
              { number: "ISG", name: "Institutional Student Gov. (ISG)", location: "Annex Building • 1st Floor • West Wing", box: { x: 132, y: 30, w: 44, h: 112 } },
              { number: "GUIDANCE", name: "Guidance & Publication", location: "Annex Building • 1st Floor • Central Wing", box: { x: 178, y: 30, w: 96, h: 112 } },
              { number: "ANNEX 101", name: "Classroom Annex 101", location: "Annex Building • 1st Floor • Central Wing", box: { x: 276, y: 30, w: 88, h: 112 } },
              { number: "ANNEX 102", name: "Classroom Annex 102", location: "Annex Building • 1st Floor • East-Central", box: { x: 366, y: 30, w: 88, h: 112 } },
              { number: "ANNEX 103", name: "Classroom Annex 103", location: "Annex Building • 1st Floor • East Wing", box: { x: 458, y: 30, w: 98, h: 112 } },
              { number: "RESEARCH", name: "Research Building", location: "Annex Building • Ground Courtyard (Behind Annex)", box: { x: 686, y: 366, w: 132, h: 132 } }
            ]
          },
          "2f": {
            id: "2f",
            label: "2nd Floor",
            type: "svg",
            viewBox: "0 0 1024 560",
            aspect: "1024 / 560",
            rooms: [
              { number: "ANNEX 201", name: "Classroom Annex 201", location: "Annex Building • 2nd Floor • West Wing", box: { x: 90, y: 170, w: 155, h: 145 } },
              { number: "ANNEX 202", name: "Classroom Annex 202", location: "Annex Building • 2nd Floor • West-Central", box: { x: 255, y: 170, w: 155, h: 145 } },
              { number: "ANNEX 203", name: "Classroom Annex 203", location: "Annex Building • 2nd Floor • Central Wing", box: { x: 420, y: 170, w: 155, h: 145 } },
              { number: "ANNEX 204", name: "Classroom Annex 204", location: "Annex Building • 2nd Floor • East-Central", box: { x: 585, y: 170, w: 155, h: 145 } },
              { number: "ANNEX 205", name: "Classroom Annex 205", location: "Annex Building • 2nd Floor • East Wing", box: { x: 750, y: 170, w: 155, h: 145 } }
            ]
          },
          "3f": {
            id: "3f",
            label: "3rd Floor",
            type: "image",
            src: "assets/floor-annex-3f.jpg",
            viewBox: "0 0 1024 711",
            aspect: "1024 / 711",
            rooms: [
              { number: "T&B A3F", name: "Comfort Room (T&B)", location: "Annex Building • 3rd Floor • West End (Near Stairs)", box: { x: 32, y: 492, w: 78, h: 90 } },
              { number: "ANNEX 301", name: "Classroom Annex 301", location: "Annex Building • 3rd Floor • West Wing", box: { x: 112, y: 492, w: 110, h: 90 } },
              { number: "ANNEX 302", name: "Classroom Annex 302", location: "Annex Building • 3rd Floor • Central Wing", box: { x: 224, y: 492, w: 108, h: 90 } },
              { number: "CANTEEN", name: "New Canteen (Stalls 1–3)", location: "Annex Building • Adjacent Grounds • North-East", box: { x: 948, y: 36, w: 42, h: 405 } }
            ]
          }
        }
      }
    };

    // App State
    const state = {
      view: "vicinity",       // "vicinity" | "floor"
      building: null,         // "main" | "annex" | null
      floor: null,            // "1f" | "2f" | "3f" | null
      roomNumber: null,       // selected room number
      showRouteOnVicinity: false,
      scale: 1,
      panX: 0,
      panY: 0
    };

    // DOM refs
    const mapStage = document.getElementById("mapStage");
    const mapTransform = document.getElementById("mapTransform");
    const mapImage = document.getElementById("mapImage");
    const svgFloorWrap = document.getElementById("svgFloorWrap");
    const mapOverlay = document.getElementById("mapOverlay");
    const mapTitle = document.getElementById("mapTitle");
    const mapSubtitle = document.getElementById("mapSubtitle");
    const floorRow = document.getElementById("floorRow");
    const selectedCard = document.getElementById("selectedCard");
    const selectedBadge = document.getElementById("selectedBadge");
    const selectedTitle = document.getElementById("selectedTitle");
    const selectedLocation = document.getElementById("selectedLocation");
    const selectedActions = document.getElementById("selectedActions");
    const directoryTitle = document.getElementById("directoryTitle");
    const directoryCount = document.getElementById("directoryCount");
    const directoryBody = document.getElementById("directoryBody");
    const searchInput = document.getElementById("searchInput");
    const searchClear = document.getElementById("searchClear");
    const searchResults = document.getElementById("searchResults");

    // Flatten all rooms for instant search
    const ALL_ROOMS = [];
    Object.values(BUILDINGS).forEach((bldg) => {
      Object.values(bldg.floors).forEach((fl) => {
        fl.rooms.forEach((rm) => {
          ALL_ROOMS.push({
            buildingId: bldg.id,
            buildingName: bldg.name,
            floorId: fl.id,
            floorLabel: fl.label,
            ...rm
          });
        });
      });
    });

    function resetZoom() {
      state.scale = 1;
      state.panX = 0;
      state.panY = 0;
      applyTransform();
    }

    function applyTransform() {
      mapTransform.style.transform = `translate(${state.panX}px, ${state.panY}px) scale(${state.scale})`;
    }

    function zoomToBox(box, viewBoxStr) {
      const [, , vw, vh] = viewBoxStr.split(" ").map(Number);
      const cx = box.x + box.w / 2;
      const cy = box.y + box.h / 2;
      const stageW = mapStage.clientWidth || 400;
      const stageH = mapStage.clientHeight || 300;
      state.scale = 1.65;
      state.panX = ((vw / 2 - cx) / vw) * stageW * 0.75;
      state.panY = ((vh / 2 - cy) / vh) * stageH * 0.75;
      applyTransform();
    }

    function updateStepper() {
      const sVic = document.getElementById("stepVicinity");
      const sBldg = document.getElementById("stepBuilding");
      const sFlr = document.getElementById("stepFloor");
      const sRm = document.getElementById("stepRoom");

      [sVic, sBldg, sFlr, sRm].forEach((el) => el.classList.remove("active", "done"));

      if (state.view === "vicinity") {
        sVic.classList.add("active");
        if (state.building) {
          sBldg.classList.add("done");
          sBldg.textContent = `2. ${BUILDINGS[state.building].name}`;
        } else {
          sBldg.textContent = "2. Building";
        }
        sFlr.textContent = "3. Floor";
        sRm.textContent = "4. Room";
      } else {
        sVic.classList.add("done");
        sBldg.classList.add("done");
        sBldg.textContent = `2. ${BUILDINGS[state.building].name}`;

        if (state.roomNumber) {
          sFlr.classList.add("done");
          sFlr.textContent = `3. ${BUILDINGS[state.building].floors[state.floor].label.replace(" (Ground)", "")}`;
          sRm.classList.add("active");
          sRm.textContent = `4. ${state.roomNumber}`;
        } else {
          sFlr.classList.add("active");
          sFlr.textContent = `3. ${BUILDINGS[state.building].floors[state.floor].label.replace(" (Ground)", "")}`;
          sRm.textContent = "4. Room";
        }
      }
    }

    function updateButtons() {
      document.querySelectorAll(".bldg-btn").forEach((btn) => {
        const key = btn.dataset.bldg;
        const isActive = (key === "vicinity" && state.view === "vicinity") || (key === state.building && state.view === "floor");
        btn.classList.toggle("active", isActive);
      });

      if (state.building) {
        floorRow.classList.add("show");
        document.querySelectorAll(".floor-btn").forEach((btn) => {
          btn.classList.toggle("active", btn.dataset.floor === state.floor);
        });
      } else {
        floorRow.classList.remove("show");
      }
    }

    function renderSvgFloorBlueprint(bldgId, floorId, floorData) {
      const isMain = bldgId === "main";
      const title = `${BUILDINGS[bldgId].name.toUpperCase()} — ${floorData.label.toUpperCase()}`;
      const corridorSvg = isMain
        ? `<rect x="48" y="458" width="895" height="32" fill="#f3f4f6" stroke="#9ca3af" stroke-width="1.5"/>
           <text x="495" y="479" text-anchor="middle" font-size="13" font-weight="700" fill="#6b7280" letter-spacing="4">MAIN CORRIDOR / WALKWAY</text>
           <rect x="832" y="122" width="30" height="336" fill="#f3f4f6" stroke="#9ca3af" stroke-width="1.5"/>
           <text x="847" y="290" text-anchor="middle" font-size="11" font-weight="700" fill="#6b7280" transform="rotate(-90 847 290)">HALL B CORRIDOR</text>`
        : `<rect x="80" y="320" width="835" height="38" fill="#f3f4f6" stroke="#9ca3af" stroke-width="1.5"/>
           <text x="495" y="344" text-anchor="middle" font-size="13" font-weight="700" fill="#6b7280" letter-spacing="4">ANNEX 2ND FLOOR CORRIDOR</text>
           <rect x="35" y="170" width="48" height="145" fill="#fef3c7" stroke="#9ca3af" stroke-width="1.5"/>
           <text x="59" y="246" text-anchor="middle" font-size="11" font-weight="700" fill="#92400e">STAIRS</text>
           <rect x="912" y="170" width="48" height="145" fill="#fef3c7" stroke="#9ca3af" stroke-width="1.5"/>
           <text x="936" y="246" text-anchor="middle" font-size="11" font-weight="700" fill="#92400e">STAIRS</text>`;

      const roomBoxes = floorData.rooms.map((rm) => {
        const cx = rm.box.x + rm.box.w / 2;
        const cy = rm.box.y + rm.box.h / 2;
        return `
          <rect x="${rm.box.x}" y="${rm.box.y}" width="${rm.box.w}" height="${rm.box.h}" rx="4" fill="#ffffff" stroke="#374151" stroke-width="2.2"/>
          <text x="${cx}" y="${cy - 5}" text-anchor="middle" font-size="12" font-weight="800" fill="#4a0e12">${rm.number}</text>
          <text x="${cx}" y="${cy + 12}" text-anchor="middle" font-size="9.5" font-weight="600" fill="#4b5563">${rm.name.replace(/\s*\(.*?\)/g, "").slice(0, 16)}</text>
        `;
      }).join("");

      svgFloorWrap.innerHTML = `
        <svg viewBox="${floorData.viewBox}" width="100%" height="100%" style="background:#faf9f6;display:block;">
          <rect x="14" y="14" width="996" height="532" rx="10" fill="#ffffff" stroke="#d6d3d1" stroke-width="2"/>
          <text x="512" y="40" text-anchor="middle" font-size="16" font-weight="800" fill="#4a0e12" letter-spacing="1">${title}</text>
          ${corridorSvg}
          ${roomBoxes}
        </svg>
      `;
    }

    function renderMap() {
      mapOverlay.innerHTML = "";

      if (state.view === "vicinity") {
        mapStage.style.aspectRatio = "732 / 616";
        mapImage.style.display = "block";
        mapImage.src = "assets/campus-map.png";
        svgFloorWrap.classList.remove("show");
        mapOverlay.setAttribute("viewBox", "0 0 732 616");

        mapTitle.textContent = "School Vicinity Map";
        mapSubtitle.textContent = "Tap Main Building or Annex Building on the map to view floors & rooms";

        // Entrance marker
        const entranceHtml = `
          <g>
            <circle cx="673" cy="538" r="10" fill="#dc2626" stroke="#fff" stroke-width="2.5"/>
            <text x="673" y="564" text-anchor="middle" font-size="12" font-weight="800" fill="#991b1b" stroke="#fff" stroke-width="3" paint-order="stroke">Main Entrance</text>
          </g>
        `;

        // Building hotspots
        const bldgHtml = Object.values(BUILDINGS).map((bldg) => {
          const isSel = state.building === bldg.id;
          const rects = bldg.vicinityHotspots.map((r) =>
            `<rect class="building-hotspot ${isSel ? "selected" : ""}" x="${r.x}" y="${r.y}" width="${r.w}" height="${r.h}" rx="8" data-bldg-click="${bldg.id}"/>`
          ).join("");
          const pulse = isSel
            ? `<circle class="pulse-ring" cx="${bldg.pin.x}" cy="${bldg.pin.y}" r="14" fill="none" stroke="#d97706" stroke-width="3"/>`
            : "";
          const badge = `
            <g style="cursor:pointer" data-bldg-click="${bldg.id}">
              ${pulse}
              <rect x="${bldg.pin.x - 62}" y="${bldg.pin.y - 14}" width="124" height="26" rx="13" fill="${isSel ? "#d97706" : "#631418"}" stroke="#fff" stroke-width="2"/>
              <text x="${bldg.pin.x}" y="${bldg.pin.y + 3}" text-anchor="middle" font-size="12" font-weight="800" fill="#fff">${bldg.name}</text>
            </g>
          `;
          return rects + badge;
        }).join("");

        // Optional walking route from entrance
        let routeHtml = "";
        if (state.showRouteOnVicinity && state.building) {
          const pts = BUILDINGS[state.building].routeFromEntrance.map((p) => `${p.x},${p.y}`).join(" ");
          routeHtml = `<polyline class="route-line" points="${pts}"/>`;
        }

        mapOverlay.innerHTML = routeHtml + bldgHtml + entranceHtml;

        mapOverlay.querySelectorAll("[data-bldg-click]").forEach((el) => {
          el.addEventListener("click", (e) => {
            e.stopPropagation();
            selectBuilding(el.dataset.bldgClick, true);
          });
        });
      } else {
        const bldg = BUILDINGS[state.building];
        const floorData = bldg.floors[state.floor];
        mapStage.style.aspectRatio = floorData.aspect;
        mapOverlay.setAttribute("viewBox", floorData.viewBox);

        if (floorData.type === "image") {
          mapImage.style.display = "block";
          mapImage.src = floorData.src;
          svgFloorWrap.classList.remove("show");
        } else {
          mapImage.style.display = "none";
          svgFloorWrap.classList.add("show");
          renderSvgFloorBlueprint(state.building, state.floor, floorData);
        }

        mapTitle.textContent = `${bldg.name} — ${floorData.label}`;
        mapSubtitle.textContent = "Tap any room on the floor plan or list below to highlight it";

        const roomsHtml = floorData.rooms.map((rm) => {
          const isSel = state.roomNumber === rm.number;
          const cx = rm.box.x + rm.box.w / 2;
          const cy = rm.box.y + rm.box.h / 2;
          const pin = isSel ? `
            <circle class="pulse-ring" cx="${cx}" cy="${cy}" r="14" fill="none" stroke="#b45309" stroke-width="4"/>
            <circle cx="${cx}" cy="${cy}" r="9" fill="#631418" stroke="#fff" stroke-width="3"/>
          ` : "";
          return `
            <rect class="room-hotspot ${isSel ? "selected" : ""}" x="${rm.box.x}" y="${rm.box.y}" width="${rm.box.w}" height="${rm.box.h}" rx="5" data-room-click="${rm.number}"/>
            ${pin}
          `;
        }).join("");

        mapOverlay.innerHTML = roomsHtml;
        mapOverlay.querySelectorAll("[data-room-click]").forEach((el) => {
          el.addEventListener("click", (e) => {
            e.stopPropagation();
            selectRoom(el.dataset.roomClick);
          });
        });
      }
    }

    function renderSelectedCard() {
      if (state.view === "vicinity" && state.building) {
        const bldg = BUILDINGS[state.building];
        selectedCard.classList.add("show");
        selectedBadge.textContent = "SELECTED BUILDING";
        selectedTitle.textContent = bldg.name;
        selectedLocation.textContent = bldg.subtitle;
        selectedActions.innerHTML = `
          <button type="button" class="action-btn action-btn-primary" id="openFloorsBtn">View Floors &amp; Rooms →</button>
          <button type="button" class="action-btn action-btn-secondary" id="toggleRouteBtn">${state.showRouteOnVicinity ? "Hide Route" : "Show Walk Route from Gate"}</button>
        `;
        document.getElementById("openFloorsBtn").addEventListener("click", () => {
          selectFloor("1f");
        });
        document.getElementById("toggleRouteBtn").addEventListener("click", () => {
          state.showRouteOnVicinity = !state.showRouteOnVicinity;
          renderMap();
          renderSelectedCard();
        });
        return;
      }

      if (state.view === "floor" && state.roomNumber) {
        const floorData = BUILDINGS[state.building].floors[state.floor];
        const rm = floorData.rooms.find((r) => r.number === state.roomNumber);
        if (rm) {
          selectedCard.classList.add("show");
          selectedBadge.textContent = rm.number;
          selectedTitle.textContent = rm.name;
          selectedLocation.textContent = rm.location;
          selectedActions.innerHTML = `
            <button type="button" class="action-btn action-btn-primary" id="walkFromGateBtn">🗺️ Walk Here from Main Gate</button>
            <button type="button" class="action-btn action-btn-secondary" id="resetRoomZoomBtn">Reset Floor Zoom</button>
          `;
          document.getElementById("walkFromGateBtn").addEventListener("click", () => {
            state.view = "vicinity";
            state.showRouteOnVicinity = true;
            resetZoom();
            renderAll();
          });
          document.getElementById("resetRoomZoomBtn").addEventListener("click", () => {
            resetZoom();
          });
          return;
        }
      }

      selectedCard.classList.remove("show");
    }

    function renderDirectory() {
      if (state.view === "vicinity") {
        directoryTitle.textContent = "Select a Building";
        directoryCount.textContent = "2 Buildings";
        directoryBody.innerHTML = `
          <div class="vicinity-cards">
            ${Object.values(BUILDINGS).map((bldg) => `
              <button type="button" class="vicinity-card ${state.building === bldg.id ? "active" : ""}" data-card-bldg="${bldg.id}">
                <div class="v-icon">${bldg.id === "main" ? "🏛️" : "🏢"}</div>
                <div class="v-title">${bldg.name}</div>
                <div class="v-sub">${bldg.subtitle}</div>
                <span class="v-cta">Select Building &amp; Floors →</span>
              </button>
            `).join("")}
          </div>
        `;
        directoryBody.querySelectorAll("[data-card-bldg]").forEach((btn) => {
          btn.addEventListener("click", () => {
            selectBuilding(btn.dataset.cardBldg, true);
          });
        });
      } else {
        const bldg = BUILDINGS[state.building];
        const floorData = bldg.floors[state.floor];
        directoryTitle.textContent = `${bldg.name} • ${floorData.label} Rooms`;
        directoryCount.textContent = `${floorData.rooms.length} Rooms`;
        directoryBody.innerHTML = `
          <div class="room-list">
            ${floorData.rooms.map((rm) => `
              <button type="button" class="room-card ${state.roomNumber === rm.number ? "active" : ""}" data-room-card="${rm.number}">
                <div class="room-card-left">
                  <div class="room-num-box">${rm.number}</div>
                  <div class="room-info">
                    <div class="room-name">${rm.name}</div>
                    <div class="room-loc">${rm.location}</div>
                  </div>
                </div>
                <span class="room-arrow">${state.roomNumber === rm.number ? "Selected ✓" : "Locate →"}</span>
              </button>
            `).join("")}
          </div>
        `;
        directoryBody.querySelectorAll("[data-room-card]").forEach((btn) => {
          btn.addEventListener("click", () => {
            selectRoom(btn.dataset.roomCard);
          });
        });
      }
    }

    function renderAll() {
      updateStepper();
      updateButtons();
      renderMap();
      renderSelectedCard();
      renderDirectory();
    }

    // Actions
    function showVicinity(keepBuilding = false) {
      state.view = "vicinity";
      if (!keepBuilding) {
        state.building = null;
        state.floor = null;
        state.roomNumber = null;
        state.showRouteOnVicinity = false;
      }
      resetZoom();
      renderAll();
    }

    function selectBuilding(bldgId, goToFirstFloor = true) {
      state.building = bldgId;
      state.roomNumber = null;
      state.showRouteOnVicinity = true;
      if (goToFirstFloor) {
        state.view = "floor";
        state.floor = state.floor || "1f";
      } else {
        state.view = "vicinity";
      }
      resetZoom();
      renderAll();
    }

    function selectFloor(floorId) {
      if (!state.building) state.building = "main";
      state.view = "floor";
      state.floor = floorId;
      state.roomNumber = null;
      resetZoom();
      renderAll();
    }

    function selectRoom(roomNum) {
      state.roomNumber = roomNum;
      const floorData = BUILDINGS[state.building].floors[state.floor];
      const rm = floorData.rooms.find((r) => r.number === roomNum);
      renderAll();
      if (rm) {
        zoomToBox(rm.box, floorData.viewBox);
      }
    }

    // Event Listeners: Buttons & Stepper
    document.querySelectorAll(".bldg-btn").forEach((btn) => {
      btn.addEventListener("click", () => {
        const key = btn.dataset.bldg;
        if (key === "vicinity") showVicinity(false);
        else selectBuilding(key, true);
      });
    });

    document.querySelectorAll(".floor-btn").forEach((btn) => {
      btn.addEventListener("click", () => {
        selectFloor(btn.dataset.floor);
      });
    });

    document.getElementById("stepVicinity").addEventListener("click", () => showVicinity(false));
    document.getElementById("stepBuilding").addEventListener("click", () => {
      if (state.building) showVicinity(true);
    });
    document.getElementById("stepFloor").addEventListener("click", () => {
      if (state.building) {
        state.view = "floor";
        state.roomNumber = null;
        resetZoom();
        renderAll();
      }
    });

    // Search Autocomplete
    function handleSearch(query) {
      const q = query.trim().toLowerCase();
      searchClear.classList.toggle("show", q.length > 0);
      if (!q) {
        searchResults.classList.remove("open");
        return;
      }
      const matches = ALL_ROOMS.filter((r) =>
        r.number.toLowerCase().includes(q) ||
        r.name.toLowerCase().includes(q) ||
        r.location.toLowerCase().includes(q)
      ).slice(0, 10);

      if (matches.length === 0) {
        searchResults.innerHTML = `<div class="search-item"><div class="search-item-sub">No matching room found. Try "MB 305", "Registrar", or "Annex 101".</div></div>`;
      } else {
        searchResults.innerHTML = matches.map((m) => `
          <button type="button" class="search-item" data-sb="${m.buildingId}" data-sf="${m.floorId}" data-sr="${m.number}">
            <div>
              <div class="search-item-title">${m.name}</div>
              <div class="search-item-sub">${m.location}</div>
            </div>
            <span class="search-item-badge">${m.number}</span>
          </button>
        `).join("");
        searchResults.querySelectorAll("[data-sr]").forEach((btn) => {
          btn.addEventListener("click", () => {
            state.building = btn.dataset.sb;
            state.floor = btn.dataset.sf;
            state.view = "floor";
            searchResults.classList.remove("open");
            searchInput.value = `${btn.dataset.sr}`;
            selectRoom(btn.dataset.sr);
          });
        });
      }
      searchResults.classList.add("open");
    }

    searchInput.addEventListener("input", (e) => handleSearch(e.target.value));
    searchClear.addEventListener("click", () => {
      searchInput.value = "";
      handleSearch("");
    });
    document.addEventListener("click", (e) => {
      if (!e.target.closest(".search-wrap")) searchResults.classList.remove("open");
    });

    // Zoom & Pan
    document.getElementById("zoomInBtn").addEventListener("click", () => {
      state.scale = Math.min(3.5, state.scale + 0.35);
      applyTransform();
    });
    document.getElementById("zoomOutBtn").addEventListener("click", () => {
      state.scale = Math.max(1, state.scale - 0.35);
      if (state.scale === 1) { state.panX = 0; state.panY = 0; }
      applyTransform();
    });
    document.getElementById("zoomResetBtn").addEventListener("click", resetZoom);

    let isDragging = false, startX = 0, startY = 0;
    mapStage.addEventListener("pointerdown", (e) => {
      if (e.target.closest(".zoom-controls") || e.target.closest("[data-bldg-click]") || e.target.closest("[data-room-click]")) return;
      isDragging = true;
      startX = e.clientX - state.panX;
      startY = e.clientY - state.panY;
      mapStage.classList.add("dragging");
    });
    window.addEventListener("pointermove", (e) => {
      if (!isDragging) return;
      if (state.scale === 1) state.scale = 1.25;
      state.panX = e.clientX - startX;
      state.panY = e.clientY - startY;
      applyTransform();
    });
    window.addEventListener("pointerup", () => {
      isDragging = false;
      mapStage.classList.remove("dragging");
    });

    // URL Params support (e.g. ?building=main&floor=3f or ?plan=main-3f)
    const params = new URLSearchParams(window.location.search);
    const pPlan = params.get("plan");
    let pBldg = params.get("building");
    let pFloor = params.get("floor");
    const pRoom = params.get("room");
    if (pPlan && pPlan.includes("-")) {
      const [b, f] = pPlan.split("-");
      if (BUILDINGS[b]) { pBldg = b; pFloor = f; }
    }
    if (pBldg && BUILDINGS[pBldg]) {
      state.building = pBldg;
      state.view = "floor";
      state.floor = (pFloor && BUILDINGS[pBldg].floors[pFloor]) ? pFloor : "1f";
      if (pRoom) state.roomNumber = pRoom;
    }

    renderAll();
  </script>
</body>
</html>
