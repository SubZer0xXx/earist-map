<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes" />
  <title>EARIST Cavite Campus — Campus Map</title>
  <link rel="icon" type="image/png" href="assets/earist-logo.png?v=2" />
  <style>
    :root {
      --maroon-dark: #4a0e12;
      --maroon: #631418;
      --maroon-light: #7c1d22;
      --cream: #f8f6f2;
      --card-bg: #ffffff;
      --text-main: #231f20;
      --text-muted: #666666;
      --cat-classrooms: #6b1d20;
      --cat-labs: #2255bc;
      --cat-offices: #df9236;
      --cat-facilities: #2e8540;
      --cat-others: #555c6e;
      --route-blue: #1d4ed8;
      --start-red: #d92626;
      --evac-green: #15803d;
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
      background-color: #ebe7e0;
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
      max-width: 520px;
      min-height: 100vh;
      background: var(--cream);
      display: flex;
      flex-direction: column;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.12);
      position: relative;
      overflow-x: hidden;
    }

    @media (min-width: 768px) {
      .app-shell {
        max-width: 620px;
        margin: 16px auto;
        min-height: auto;
        border-radius: 22px;
        overflow: hidden;
      }
    }

    /* Fullscreen Mode overrides */
    body.map-fullscreen .app-shell {
      max-width: 100vw;
      height: 100vh;
      margin: 0;
      border-radius: 0;
      overflow: hidden;
    }

    body.map-fullscreen .app-header,
    body.map-fullscreen .categories-grid,
    body.map-fullscreen .category-drawer {
      display: none !important;
    }

    body.map-fullscreen .app-body {
      margin-top: 0;
      border-radius: 0;
      padding: 10px;
      height: 100vh;
      overflow: hidden;
    }

    body.map-fullscreen .map-container {
      flex: 1;
      aspect-ratio: auto;
      height: 100%;
    }

    /* Header matching Phone Mockup */
    .app-header {
      background: linear-gradient(135deg, var(--maroon-dark) 0%, var(--maroon) 100%);
      color: #fff;
      padding: 14px 16px 22px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
    }

    .brand-group {
      display: flex;
      align-items: center;
      gap: 11px;
    }

    .brand-logo {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid rgba(255, 255, 255, 0.85);
      background: var(--maroon-dark);
      flex-shrink: 0;
    }

    .brand-text h1 {
      font-size: 1.25rem;
      font-weight: 800;
      letter-spacing: 1px;
      line-height: 1.1;
    }

    .brand-text p {
      font-size: 0.7rem;
      letter-spacing: 1.4px;
      opacity: 0.9;
      margin-top: 2px;
      text-transform: uppercase;
    }

    .qr-shortcut-btn {
      background: rgba(255, 255, 255, 0.14);
      color: #fff;
      border: 1px solid rgba(255, 255, 255, 0.28);
      border-radius: 10px;
      padding: 6px 10px;
      font-size: 0.73rem;
      font-weight: 600;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 5px;
      white-space: nowrap;
    }

    /* Main Content Container */
    .app-body {
      background: var(--card-bg);
      border-radius: 20px 20px 0 0;
      margin-top: -12px;
      padding: 14px 14px 20px;
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 12px;
      width: 100%;
      min-width: 0;
    }

    /* Search Bar */
    .search-wrapper {
      position: relative;
      width: 100%;
    }

    .search-box {
      display: flex;
      align-items: center;
      background: #f4f3f1;
      border: 1.5px solid #e2dfda;
      border-radius: 12px;
      padding: 3px 5px 3px 12px;
      width: 100%;
    }

    .search-box:focus-within {
      border-color: var(--maroon);
      background: #fff;
    }

    .search-box input {
      flex: 1;
      min-width: 0;
      border: none;
      background: transparent;
      font-size: 0.86rem;
      color: var(--text-main);
      outline: none;
      padding: 7px 4px 7px 0;
      text-overflow: ellipsis;
    }

    .search-box button {
      width: 32px;
      height: 32px;
      flex-shrink: 0;
      border-radius: 9px;
      border: none;
      background: #e6e3de;
      color: #333;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }

    /* Search Dropdown */
    .search-dropdown {
      position: absolute;
      top: calc(100% + 5px);
      left: 0;
      right: 0;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.18);
      border: 1px solid #e5e2dc;
      max-height: 250px;
      overflow-y: auto;
      z-index: 60;
      display: none;
    }

    .search-dropdown.open {
      display: block;
    }

    .search-item {
      padding: 9px 12px;
      border-bottom: 1px solid #f1efeb;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 8px;
    }

    .search-item:hover {
      background: #f9f5f5;
    }

    .search-item-title {
      font-size: 0.84rem;
      font-weight: 700;
      color: var(--text-main);
    }

    .search-item-sub {
      font-size: 0.71rem;
      color: var(--text-muted);
      margin-top: 1px;
    }

    .cat-pill {
      font-size: 0.64rem;
      font-weight: 700;
      padding: 3px 7px;
      border-radius: 999px;
      color: #fff;
      text-transform: uppercase;
      flex-shrink: 0;
    }

    /* 5 Category Buttons */
    .categories-grid {
      display: grid;
      grid-template-columns: repeat(5, minmax(0, 1fr));
      gap: 4px;
      text-align: center;
      width: 100%;
    }

    .cat-btn {
      border: none;
      background: transparent;
      cursor: pointer;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 4px;
      padding: 2px 1px;
      border-radius: 10px;
      min-width: 0;
      transition: transform 0.15s, opacity 0.15s;
    }

    .cat-btn.dimmed {
      opacity: 0.42;
    }

    .cat-icon {
      width: clamp(36px, 10vw, 42px);
      height: clamp(36px, 10vw, 42px);
      border-radius: 11px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.12);
    }

    .cat-btn.active .cat-icon {
      outline: 2px solid #222;
      outline-offset: 2px;
    }

    .cat-label {
      font-size: clamp(0.6rem, 2.2vw, 0.68rem);
      font-weight: 600;
      color: #333;
      width: 100%;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    /* Compact Category Chips Drawer (Only visible when a category is tapped) */
    .category-drawer {
      background: #f8f6f2;
      border: 1px solid #e6e1d8;
      border-radius: 11px;
      padding: 8px 10px;
      display: none;
      flex-direction: column;
      gap: 6px;
    }

    .category-drawer.open {
      display: flex;
    }

    .drawer-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-size: 0.72rem;
      font-weight: 800;
      color: var(--maroon);
      text-transform: uppercase;
    }

    .drawer-chips {
      display: flex;
      flex-wrap: wrap;
      gap: 5px;
    }

    .dir-chip {
      border: 1px solid #dfd9d0;
      background: #fff;
      color: #222;
      padding: 5px 10px;
      border-radius: 999px;
      font-size: 0.73rem;
      font-weight: 600;
      cursor: pointer;
    }

    .dir-chip.active, .dir-chip:hover {
      background: var(--maroon);
      color: #fff;
      border-color: var(--maroon);
    }

    /* Clean Map Header Bar with Single Floor Plan Dropdown */
    .map-header-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 8px;
    }

    .section-title {
      font-size: 0.82rem;
      font-weight: 800;
      color: var(--maroon);
      letter-spacing: 0.5px;
      text-transform: uppercase;
    }

    .plan-select {
      border: 1.5px solid #d8d2c7;
      background: #f8f6f2;
      color: var(--maroon-dark);
      border-radius: 8px;
      padding: 5px 8px;
      font-size: 0.74rem;
      font-weight: 700;
      outline: none;
      cursor: pointer;
      max-width: 195px;
      text-overflow: ellipsis;
    }

    /* Live Guided Turn-by-Turn Banner */
    .live-nav-banner {
      background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 100%);
      color: #fff;
      border-radius: 12px;
      padding: 10px 12px;
      display: none;
      flex-direction: column;
      gap: 8px;
    }

    .live-nav-banner.active {
      display: flex;
    }

    .nav-banner-top {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .turn-icon-box {
      width: 36px;
      height: 36px;
      border-radius: 9px;
      background: rgba(255, 255, 255, 0.18);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.15rem;
      flex-shrink: 0;
    }

    .turn-step-count {
      font-size: 0.66rem;
      text-transform: uppercase;
      opacity: 0.85;
      font-weight: 700;
    }

    .turn-instruction {
      font-size: 0.84rem;
      font-weight: 800;
      margin-top: 1px;
    }

    .nav-controls-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 5px;
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      padding-top: 6px;
    }

    .nav-step-btn {
      background: rgba(255, 255, 255, 0.18);
      color: #fff;
      border: none;
      padding: 5px 9px;
      border-radius: 7px;
      font-size: 0.72rem;
      font-weight: 700;
      cursor: pointer;
    }

    .nav-step-btn.stop-btn {
      background: #ef4444;
    }

    /* Interactive Map Viewport */
    .map-container {
      position: relative;
      width: 100%;
      aspect-ratio: 732 / 616;
      background: #ffffff;
      border-radius: 14px;
      border: 2px solid #dfdcd5;
      overflow: hidden;
      touch-action: none;
      user-select: none;
    }

    .map-stage {
      width: 100%;
      height: 100%;
      position: relative;
      transform-origin: 0 0;
      transition: transform 0.2s ease-out;
      cursor: grab;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .map-stage.dragging {
      cursor: grabbing;
      transition: none;
    }

    .map-stage img {
      width: 100%;
      height: 100%;
      object-fit: contain;
      display: block;
      pointer-events: none;
    }

    .map-overlay {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
    }

    .bldg-zone {
      fill: rgba(99, 20, 24, 0.01);
      stroke: transparent;
      stroke-width: 1.5;
      cursor: pointer;
      transition: fill 0.15s, stroke 0.15s;
      rx: 3px;
    }

    .bldg-zone:hover {
      fill: rgba(99, 20, 24, 0.16);
      stroke: var(--maroon);
    }

    .bldg-zone.category-match {
      fill: rgba(34, 85, 188, 0.2);
      stroke: #2255bc;
      stroke-width: 2.5;
      stroke-dasharray: 4 2;
    }

    .bldg-zone.selected {
      fill: rgba(29, 78, 216, 0.24);
      stroke: var(--route-blue);
      stroke-width: 3;
      stroke-dasharray: none;
    }

    .route-path-casing {
      fill: none;
      stroke: #ffffff;
      stroke-width: 8.5;
      stroke-linecap: round;
      stroke-linejoin: round;
      opacity: 0.92;
    }

    .route-path-line {
      fill: none;
      stroke: var(--route-blue);
      stroke-width: 5;
      stroke-linecap: round;
      stroke-linejoin: round;
      stroke-dasharray: 10 7;
      animation: dashFlow 0.85s linear infinite;
    }

    @keyframes dashFlow {
      to { stroke-dashoffset: -17; }
    }

    .pin-pulse {
      animation: pulseRing 1.5s ease-out infinite;
      transform-origin: center;
      transform-box: fill-box;
    }

    @keyframes pulseRing {
      0% { transform: scale(0.8); opacity: 0.9; }
      100% { transform: scale(2.2); opacity: 0; }
    }

    /* Floating Zoom Controls (+ / - / Reset) matching Poster Mockup */
    .map-controls {
      position: absolute;
      top: 10px;
      right: 10px;
      display: flex;
      flex-direction: column;
      background: rgba(255, 255, 255, 0.95);
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      border: 1px solid #e0ddd7;
      overflow: hidden;
      z-index: 15;
    }

    .map-ctrl-btn {
      width: 32px;
      height: 32px;
      border: none;
      background: transparent;
      color: #333;
      font-size: 1rem;
      font-weight: 700;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      border-bottom: 1px solid #eae7e1;
    }

    .map-ctrl-btn:last-child {
      border-bottom: none;
    }

    .exit-fs-pill {
      position: absolute;
      top: 10px;
      left: 10px;
      background: var(--maroon-dark);
      color: #fff;
      border: none;
      border-radius: 9px;
      padding: 7px 12px;
      font-size: 0.75rem;
      font-weight: 700;
      cursor: pointer;
      z-index: 20;
      display: none;
    }

    body.map-fullscreen .exit-fs-pill {
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    /* Simple, Clean Destination Card */
    .destination-card {
      background: #fdfaf9;
      border: 1.5px solid #e6d4d5;
      border-left: 5px solid var(--maroon);
      border-radius: 12px;
      padding: 11px 12px;
      display: none;
      flex-direction: column;
      gap: 8px;
    }

    .destination-card.visible {
      display: flex;
    }

    .dest-header {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 8px;
    }

    .dest-name {
      font-size: 0.92rem;
      font-weight: 800;
      color: var(--maroon-dark);
    }

    .dest-meta {
      font-size: 0.74rem;
      color: var(--text-muted);
      margin-top: 2px;
      font-weight: 600;
    }

    .dest-evac-badge {
      display: inline-flex;
      align-items: center;
      background: #dcfce7;
      color: #166534;
      font-size: 0.7rem;
      font-weight: 700;
      padding: 3px 8px;
      border-radius: 6px;
      margin-top: 4px;
    }

    .dest-close {
      border: none;
      background: #eee;
      color: #444;
      width: 24px;
      height: 24px;
      border-radius: 50%;
      font-size: 0.88rem;
      cursor: pointer;
      flex-shrink: 0;
    }

    .nav-action-row {
      display: flex;
      flex-wrap: wrap;
      gap: 6px;
    }

    .btn-start-nav {
      flex: 1;
      background: var(--route-blue);
      color: #fff;
      border: none;
      border-radius: 8px;
      padding: 8px 11px;
      font-size: 0.78rem;
      font-weight: 700;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 5px;
    }

    .btn-floor-plan {
      background: var(--evac-green);
      color: #fff;
      border: none;
      border-radius: 8px;
      padding: 8px 10px;
      font-size: 0.75rem;
      font-weight: 700;
      cursor: pointer;
      display: none;
      align-items: center;
      gap: 4px;
    }

    .btn-floor-plan.visible {
      display: inline-flex;
    }

    .steps-list {
      background: #fff;
      border: 1px solid #ece8e4;
      border-radius: 8px;
      padding: 7px 9px;
      display: flex;
      flex-direction: column;
      gap: 5px;
    }

    .step-item {
      display: flex;
      align-items: center;
      gap: 7px;
      font-size: 0.75rem;
      color: #2c2c2c;
      padding: 3px 4px;
      border-radius: 5px;
      cursor: pointer;
    }

    .step-item.active-step {
      background: #eff6ff;
      color: var(--route-blue);
      font-weight: 700;
    }

    .step-badge {
      width: 18px;
      height: 18px;
      border-radius: 50%;
      background: var(--maroon);
      color: #fff;
      font-size: 0.64rem;
      font-weight: 700;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    /* Primary Button: View Full Map (Matches Phone Mockup) */
    .btn-full-map {
      width: 100%;
      background: var(--maroon);
      color: #fff;
      border: none;
      border-radius: 12px;
      padding: 12px 16px;
      font-size: 0.9rem;
      font-weight: 700;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      box-shadow: 0 4px 12px rgba(99, 20, 24, 0.22);
    }

    .btn-full-map:hover {
      background: var(--maroon-light);
    }
  </style>
</head>
<body>

  <div class="app-shell">
    <!-- Top EARIST Header -->
    <header class="app-header">
      <div class="brand-group">
        <img src="assets/earist-logo.png?v=2" alt="EARIST Logo" class="brand-logo" />
        <div class="brand-text">
          <h1>EARIST</h1>
          <p>CAVITE CAMPUS</p>
        </div>
      </div>
      <a href="./" class="qr-shortcut-btn" title="View Entrance QR Code">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
          <rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/>
          <rect x="3" y="14" width="7" height="7"/><path d="M14 14h3v3h-3zM18 18h3v3h-3z"/>
        </svg>
        QR Code
      </a>
    </header>

    <!-- Main Body -->
    <main class="app-body">
      <!-- 1. Search Bar -->
      <div class="search-wrapper">
        <div class="search-box">
          <input
            type="text"
            id="searchInput"
            placeholder="Search destination (e.g. Room 211, Clinic, Canteen)..."
            autocomplete="off"
          />
          <button type="button" id="clearSearchBtn" title="Search">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round">
              <circle cx="11" cy="11" r="7"></circle>
              <line x1="20" y1="20" x2="16.35" y2="16.35"></line>
            </svg>
          </button>
        </div>
        <div class="search-dropdown" id="searchDropdown"></div>
      </div>

      <!-- 2. Five Category Icons matching the Phone Mockup -->
      <div class="categories-grid" id="categoryButtons">
        <button class="cat-btn" data-cat="classrooms" type="button">
          <div class="cat-icon" style="background: var(--cat-classrooms);">
            <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
              <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
            </svg>
          </div>
          <span class="cat-label">Classrooms</span>
        </button>

        <button class="cat-btn" data-cat="laboratories" type="button">
          <div class="cat-icon" style="background: var(--cat-labs);">
            <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M10 2v7.31L4.72 18.55A2 2 0 0 0 6.46 21.5h11.08a2 2 0 0 0 1.74-2.95L14 9.31V2"></path>
              <path d="M8.5 2h7"></path>
              <path d="M7 16h10"></path>
            </svg>
          </div>
          <span class="cat-label">Laboratories</span>
        </button>

        <button class="cat-btn" data-cat="offices" type="button">
          <div class="cat-icon" style="background: var(--cat-offices);">
            <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect>
              <path d="M9 22v-4h6v4"></path>
              <path d="M8 6h.01M16 6h.01M12 6h.01M12 10h.01M12 14h.01M16 10h.01M16 14h.01M8 10h.01M8 14h.01"></path>
            </svg>
          </div>
          <span class="cat-label">Offices</span>
        </button>

        <button class="cat-btn" data-cat="facilities" type="button">
          <div class="cat-icon" style="background: var(--cat-facilities);">
            <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
          </div>
          <span class="cat-label">Facilities</span>
        </button>

        <button class="cat-btn" data-cat="others" type="button">
          <div class="cat-icon" style="background: var(--cat-others);">
            <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="1.5"></circle>
              <circle cx="19" cy="12" r="1.5"></circle>
              <circle cx="5" cy="12" r="1.5"></circle>
            </svg>
          </div>
          <span class="cat-label">Others</span>
        </button>
      </div>

      <!-- Compact Category Drawer (Appears ONLY when a category icon is tapped) -->
      <div class="category-drawer" id="categoryDrawer">
        <div class="drawer-header">
          <span id="drawerTitle">Select a Place</span>
          <span style="font-weight:600; color:#666; cursor:pointer;" id="closeDrawerBtn">Close &times;</span>
        </div>
        <div class="drawer-chips" id="drawerChips"></div>
      </div>

      <!-- 3. Campus Map Header + Single Clean Floor Plan Dropdown -->
      <div class="map-header-bar">
        <span class="section-title">CAMPUS MAP</span>
        <select class="plan-select" id="planSelect" title="Switch Map or Floor Plan">
          <option value="campus">🗺️ Campus Map (Main)</option>
          <option value="main-1f">🏢 Main Bldg (1st Floor)</option>
          <option value="main-3f">🏢 Main Bldg (3rd Floor)</option>
          <option value="annex-1f">🏢 Annex Bldg (1st Floor)</option>
          <option value="annex-3f">🏢 Annex Bldg (3rd Floor)</option>
          <option value="evac-master">🚨 All Evacuation Routes</option>
          <option value="site-plan">📍 Vicinity Map</option>
        </select>
      </div>

      <!-- Live Guided Turn-by-Turn Banner -->
      <div class="live-nav-banner" id="liveNavBanner">
        <div class="nav-banner-top">
          <div class="turn-icon-box" id="turnIconBox">&#8593;</div>
          <div style="flex:1;">
            <div class="turn-step-count" id="turnStepCount">STEP 1 OF 3</div>
            <div class="turn-instruction" id="turnInstruction">Start at Main Entrance</div>
          </div>
        </div>
        <div class="nav-controls-row">
          <button type="button" class="nav-step-btn" id="prevStepBtn">&larr; Prev</button>
          <button type="button" class="nav-step-btn" id="playPauseNavBtn">&#9654; Auto-Walk</button>
          <button type="button" class="nav-step-btn" id="voiceToggleBtn">&#128266; Voice</button>
          <button type="button" class="nav-step-btn" id="nextStepBtn">Next &rarr;</button>
          <button type="button" class="nav-step-btn stop-btn" id="stopNavBtn">Done</button>
        </div>
      </div>

      <!-- 4. Interactive Map Viewport -->
      <div class="map-container" id="mapViewport">
        <button type="button" class="exit-fs-pill" id="exitFsBtn">
          &#10005; Exit Full Map
        </button>

        <div class="map-stage" id="mapStage">
          <img src="assets/campus-map.png" alt="EARIST Cavite Campus Map" id="activeMapImage" />
          <svg class="map-overlay" viewBox="0 0 732 616" preserveAspectRatio="none" id="mapSvg">
            <defs>
              <marker id="routeArrow" viewBox="0 0 10 10" refX="6" refY="5" markerWidth="4.5" markerHeight="4.5" orient="auto-start-reverse">
                <path d="M 0 1 L 10 5 L 0 9 z" fill="#1d4ed8" />
              </marker>
            </defs>
            <g id="buildingZones"></g>
            <g id="routeLayer"></g>
            <g id="pinLayer"></g>
          </svg>
        </div>

        <!-- Clean + / - / Reset Controls matching Poster Mockup -->
        <div class="map-controls">
          <button type="button" class="map-ctrl-btn" id="zoomInBtn" title="Zoom In">+</button>
          <button type="button" class="map-ctrl-btn" id="zoomOutBtn" title="Zoom Out">&minus;</button>
          <button type="button" class="map-ctrl-btn" id="resetViewBtn" title="Center Map">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
              <polygon points="3 11 22 2 13 21 11 13 3 11"></polygon>
            </svg>
          </button>
        </div>
      </div>

      <!-- Selected Destination Directions Card (Appears when a building/room is selected) -->
      <div class="destination-card" id="destinationCard">
        <div class="dest-header">
          <div>
            <div class="dest-name" id="destName">Destination</div>
            <div class="dest-meta" id="destMeta">1 min walk from Main Entrance</div>
            <div class="dest-evac-badge" id="destEvacBadge"></div>
          </div>
          <button type="button" class="dest-close" id="closeDestBtn" title="Close">&times;</button>
        </div>

        <div class="nav-action-row">
          <button type="button" class="btn-start-nav" id="startGuidedNavBtn">
            &#10148; Start Directions
          </button>
          <button type="button" class="btn-floor-plan" id="viewBuildingFloorPlanBtn">
            &#127970; View Floor Plan
          </button>
        </div>

        <div class="steps-list" id="stepsList"></div>
      </div>

      <!-- 5. View Full Map Button matching Poster Mockup -->
      <button type="button" class="btn-full-map" id="viewFullMapBtn">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="15 3 21 3 21 9"></polyline>
          <polyline points="9 21 3 21 3 15"></polyline>
          <line x1="21" y1="3" x2="14" y2="10"></line>
          <line x1="3" y1="21" x2="10" y2="14"></line>
        </svg>
        View Full Map
      </button>
    </main>
  </div>

  <script>
    // 1. Floor Plans & Map Views
    const FLOOR_PLANS = {
      "campus":      { src: "assets/campus-map.png", aspect: "732 / 616", isInteractive: true },
      "main-1f":     { src: "assets/floor-main-1f.jpg", aspect: "1024 / 612", isInteractive: false },
      "main-3f":     { src: "assets/floor-main-3f.jpg", aspect: "1024 / 557", isInteractive: false },
      "annex-1f":    { src: "assets/floor-annex-1f.jpg", aspect: "1024 / 655", isInteractive: false },
      "annex-3f":    { src: "assets/floor-annex-3f.jpg", aspect: "1024 / 711", isInteractive: false },
      "evac-master": { src: "assets/evacuation-master-plan.jpg", aspect: "1024 / 553", isInteractive: false },
      "site-plan":   { src: "assets/campus-vicinity-plan.jpg", aspect: "1024 / 555", isInteractive: false }
    };

    // 2. Campus Walkway Graph
    const NAV_NODES = {
      n_entrance:      { x: 673, y: 538, name: "Main Entrance" },
      n_foyer:         { x: 660, y: 495, name: "Entrance Hallway" },
      n_hall_b_south:  { x: 660, y: 447, name: "Main Walkway" },
      n_hall_b_mid:    { x: 660, y: 380, name: "Hall B Walkway" },
      n_hall_b_north:  { x: 660, y: 295, name: "North Hall B" },
      n_evac1:         { x: 598, y: 447, name: "East Walkway" },
      n_quad_south:    { x: 516, y: 447, name: "Quadrangle Walkway" },
      n_quad_center:   { x: 516, y: 362, name: "Quadrangle" },
      n_hall_a_east:   { x: 550, y: 447, name: "Main Hall A Walkway" },
      n_hall_a_mid:    { x: 456, y: 447, name: "Main Hall A" },
      n_central_south: { x: 384, y: 447, name: "Central Walkway" },
      n_central_mid:   { x: 384, y: 340, name: "Garden Walkway" },
      n_central_north: { x: 384, y: 235, name: "Clinic Walkway" },
      n_evac5_south:   { x: 384, y: 158, name: "North Courtyard" },
      n_annex_south:   { x: 290, y: 447, name: "Annex Walkway" },
      n_west_junction: { x: 228, y: 447, name: "West Walkway" },
      n_west_south:    { x: 228, y: 551, name: "Faculty Walkway" },
      n_west_mid:      { x: 228, y: 398, name: "West Wing Corner" },
      n_bldg_d_walk:   { x: 167, y: 398, name: "Bldg D Walkway" },
      n_bldg_c_walk:   { x: 96,  y: 398, name: "Bldg C Walkway" },
      n_bldg_a_walk:   { x: 35,  y: 398, name: "Bldg A Walkway" },
      n_west_north1:   { x: 245, y: 245, name: "Annex North Path" },
      n_west_north2:   { x: 225, y: 182, name: "Bleachers Path" },
      n_west_north3:   { x: 225, y: 122, name: "Tech Bldg Path" },
      n_west_north4:   { x: 225, y: 78,  name: "Canteen Path" }
    };

    const NAV_EDGES = [
      ["n_entrance", "n_foyer"],
      ["n_foyer", "n_hall_b_south"],
      ["n_hall_b_south", "n_hall_b_mid"],
      ["n_hall_b_mid", "n_hall_b_north"],
      ["n_hall_b_south", "n_evac1"],
      ["n_evac1", "n_hall_a_east"],
      ["n_hall_a_east", "n_quad_south"],
      ["n_quad_south", "n_quad_center"],
      ["n_quad_south", "n_hall_a_mid"],
      ["n_hall_a_mid", "n_central_south"],
      ["n_central_south", "n_central_mid"],
      ["n_central_mid", "n_central_north"],
      ["n_central_north", "n_evac5_south"],
      ["n_central_south", "n_annex_south"],
      ["n_annex_south", "n_west_junction"],
      ["n_west_junction", "n_west_south"],
      ["n_west_junction", "n_west_mid"],
      ["n_west_mid", "n_bldg_d_walk"],
      ["n_bldg_d_walk", "n_bldg_c_walk"],
      ["n_bldg_c_walk", "n_bldg_a_walk"],
      ["n_west_mid", "n_west_north1"],
      ["n_west_north1", "n_west_north2"],
      ["n_west_north2", "n_west_north3"],
      ["n_west_north3", "n_west_north4"],
      ["n_central_north", "n_west_north1"]
    ];

    // 3. Locations Database with Short, Easy Names
    const LOCATIONS = [
      {
        id: "main-entrance",
        shortName: "Main Entrance",
        name: "Main Entrance",
        category: "others",
        secondaryCategories: [],
        catColor: "#d92626",
        rect: { x: 635, y: 520, w: 85, h: 65 },
        pin: { x: 673, y: 538 },
        navNode: "n_entrance",
        floorPlanId: "site-plan",
        evacInfo: "Main Gate along Congressional Road",
        rooms: ["Main Entrance", "Guard House"]
      },
      {
        id: "main-hall-a",
        shortName: "Main Hall A",
        name: "Main Building Hall - A",
        category: "classrooms",
        secondaryCategories: ["offices", "laboratories", "facilities"],
        catColor: "#6b1d20",
        rect: { x: 238, y: 455, w: 425, h: 92 },
        pin: { x: 456, y: 500 },
        navNode: "n_hall_a_mid",
        floorPlanId: "main-1f",
        evacInfo: "Evac Sites 2, 3 & 4",
        rooms: [
          "MB 101", "MB 102", "MB 103", "ROTC Quarter", "Admission Office", "Admin Office",
          "Registrar Office", "Conference Room", "MB 201 Speech Lab", "MB 202 Property Mgmt",
          "MB 203–205", "Undergraduate Library", "Graduate Library", "Internet Room",
          "MB 301 Graduate Office", "MB 302 Computer Lab", "MB 303 Computer Lab", "MPH 1–3"
        ]
      },
      {
        id: "main-hall-b",
        shortName: "Main Hall B",
        name: "Main Building Hall - B",
        category: "laboratories",
        secondaryCategories: ["classrooms"],
        catColor: "#2255bc",
        rect: { x: 668, y: 273, w: 46, h: 215 },
        pin: { x: 691, y: 380 },
        navNode: "n_hall_b_mid",
        floorPlanId: "main-3f",
        evacInfo: "Evac Site 1 (1F/2F) & Site 3 (3F)",
        rooms: [
          "MB 104 Auto Diesel Shop", "MB 105", "MB 106 Elec. RM", "MB 107 Electronics",
          "MB 206–207", "MB 208–209 Food Tech", "MB 210 TLE", "MB 211 Drafting",
          "MB 304 Crim Lab", "MB 305 Forensic Lab", "MB 306 Biology Lab", "MB 307 Chemistry Lab"
        ]
      },
      {
        id: "annex-bldg",
        shortName: "Annex Bldg",
        name: "Annex Building (Annex 1)",
        category: "classrooms",
        secondaryCategories: ["offices"],
        catColor: "#6b1d20",
        rect: { x: 263, y: 147, w: 54, h: 287 },
        pin: { x: 290, y: 295 },
        navNode: "n_annex_south",
        floorPlanId: "annex-1f",
        evacInfo: "Evac Site 5 (1F) & Site 6 (3F)",
        rooms: ["OSA", "ISG", "Guidance Publication", "Annex 101–103", "Annex 301 & 302"]
      },
      {
        id: "faculty-bldg",
        shortName: "Faculty Bldg",
        name: "Faculty Building",
        category: "offices",
        secondaryCategories: [],
        catColor: "#df9236",
        rect: { x: 90, y: 434, w: 128, h: 88 },
        pin: { x: 154, y: 478 },
        navNode: "n_west_junction",
        floorPlanId: "main-3f",
        evacInfo: "Evac Site 4 (Ms. Catherine Dumpit)",
        rooms: ["Faculty Office", "Department Heads"]
      },
      {
        id: "tech-bldg",
        shortName: "Tech / Crim Bldg",
        name: "Technology & Crim Building",
        category: "laboratories",
        secondaryCategories: ["classrooms"],
        catColor: "#2255bc",
        rect: { x: 238, y: 81, w: 66, h: 60 },
        pin: { x: 271, y: 111 },
        navNode: "n_west_north3",
        floorPlanId: "evac-master",
        evacInfo: "Evac Site 6",
        rooms: ["Technology Bldg", "Criminology Bldg"]
      },
      {
        id: "research-bldg",
        shortName: "Research Bldg",
        name: "Research Building",
        category: "laboratories",
        secondaryCategories: ["offices"],
        catColor: "#2255bc",
        rect: { x: 390, y: 175, w: 68, h: 72 },
        pin: { x: 424, y: 211 },
        navNode: "n_central_north",
        floorPlanId: "annex-1f",
        evacInfo: "Evac Site 5 (Dr. Lyn Gondra)",
        rooms: ["Research Center", "Extension Office"]
      },
      {
        id: "clinic",
        shortName: "Clinic",
        name: "Campus Clinic",
        category: "facilities",
        secondaryCategories: ["offices"],
        catColor: "#2e8540",
        rect: { x: 335, y: 193, w: 50, h: 58 },
        pin: { x: 360, y: 222 },
        navNode: "n_central_north",
        floorPlanId: "evac-master",
        evacInfo: "Evac Site 2 (Mr. Melvin Eballe)",
        rooms: ["Medical & Dental Clinic", "First Aid"]
      },
      {
        id: "new-canteen",
        shortName: "New Canteen",
        name: "New Canteen",
        category: "facilities",
        secondaryCategories: [],
        catColor: "#2e8540",
        rect: { x: 19, y: 66, w: 207, h: 24 },
        pin: { x: 122, y: 78 },
        navNode: "n_west_north4",
        floorPlanId: "annex-3f",
        evacInfo: "Evac Site 6 (Mr. Mark Joseph Viado)",
        rooms: ["Canteen Stalls 1, 2 & 3"]
      },
      {
        id: "quadrangle",
        shortName: "Quadrangle (Site 3)",
        name: "Quadrangle / Covered Court (Evac Site 3)",
        category: "facilities",
        secondaryCategories: ["others"],
        catColor: "#ea580c",
        rect: { x: 482, y: 300, w: 68, h: 124 },
        pin: { x: 516, y: 362 },
        navNode: "n_quad_south",
        floorPlanId: "main-3f",
        evacInfo: "Team Leader: Mr. Andrew Intia (16.44m x 29.40m)",
        rooms: ["Covered Court", "Evacuation Site 3"]
      },
      {
        id: "stage",
        shortName: "Stage",
        name: "Campus Stage",
        category: "facilities",
        secondaryCategories: [],
        catColor: "#2e8540",
        rect: { x: 482, y: 255, w: 68, h: 41 },
        pin: { x: 516, y: 275 },
        navNode: "n_quad_center",
        floorPlanId: "main-1f",
        evacInfo: "Beside Quadrangle",
        rooms: ["Stage"]
      },
      {
        id: "bleachers",
        shortName: "Bleachers",
        name: "Main Bleachers",
        category: "facilities",
        secondaryCategories: [],
        catColor: "#2e8540",
        rect: { x: 39, y: 156, w: 172, h: 53 },
        pin: { x: 125, y: 182 },
        navNode: "n_west_north2",
        floorPlanId: "annex-3f",
        evacInfo: "Near Evacuation Site 6",
        rooms: ["Sports Bleachers"]
      },
      {
        id: "bldg-a",
        shortName: "Bldg A",
        name: "Building A",
        category: "classrooms",
        secondaryCategories: [],
        catColor: "#6b1d20",
        rect: { x: 12, y: 251, w: 47, h: 126 },
        pin: { x: 35, y: 314 },
        navNode: "n_bldg_a_walk",
        floorPlanId: "site-plan",
        evacInfo: "West Wing Classrooms",
        rooms: ["Building A Rooms"]
      },
      {
        id: "bldg-c",
        shortName: "Bldg C",
        name: "Building C",
        category: "classrooms",
        secondaryCategories: [],
        catColor: "#6b1d20",
        rect: { x: 68, y: 251, w: 56, h: 139 },
        pin: { x: 96, y: 320 },
        navNode: "n_bldg_c_walk",
        floorPlanId: "site-plan",
        evacInfo: "West Wing Classrooms",
        rooms: ["Building C Rooms"]
      },
      {
        id: "bldg-d",
        shortName: "Bldg D",
        name: "Building D",
        category: "classrooms",
        secondaryCategories: [],
        catColor: "#6b1d20",
        rect: { x: 139, y: 251, w: 56, h: 139 },
        pin: { x: 167, y: 320 },
        navNode: "n_bldg_d_walk",
        floorPlanId: "site-plan",
        evacInfo: "West Wing Classrooms",
        rooms: ["Building D Rooms"]
      },
      {
        id: "evac-1",
        shortName: "Evac Site 1",
        name: "Evacuation Site 1",
        category: "others",
        secondaryCategories: [],
        catColor: "#db2777",
        rect: { x: 554, y: 252, w: 89, h: 174 },
        pin: { x: 598, y: 339 },
        navNode: "n_evac1",
        floorPlanId: "main-1f",
        evacInfo: "Leader: Mr. Anthony Jude Pael (19.80m x 38m)",
        rooms: ["MB 104–107, MB 206–211 Assembly"]
      },
      {
        id: "evac-2",
        shortName: "Evac Site 2",
        name: "Evacuation Site 2",
        category: "others",
        secondaryCategories: [],
        catColor: "#e11d48",
        rect: { x: 390, y: 252, w: 88, h: 174 },
        pin: { x: 434, y: 339 },
        navNode: "n_hall_a_mid",
        floorPlanId: "main-1f",
        evacInfo: "Leader: Mr. Melvin Eballe (19.80m x 38m)",
        rooms: ["Clinic, ROTC, MB 101–103, MB 201–205"]
      },
      {
        id: "evac-4",
        shortName: "Evac Site 4",
        name: "Evacuation Site 4",
        category: "others",
        secondaryCategories: [],
        catColor: "#a16207",
        rect: { x: 116, y: 525, w: 92, h: 53 },
        pin: { x: 162, y: 551 },
        navNode: "n_west_south",
        floorPlanId: "main-3f",
        evacInfo: "Leader: Ms. Catherine Dumpit (13m x 29.37m)",
        rooms: ["Faculty Bldg, Library, Admin, Registrar"]
      },
      {
        id: "evac-5",
        shortName: "Evac Site 5",
        name: "Evacuation Site 5",
        category: "others",
        secondaryCategories: [],
        catColor: "#15803d",
        rect: { x: 319, y: 53, w: 128, h: 103 },
        pin: { x: 383, y: 104 },
        navNode: "n_evac5_south",
        floorPlanId: "annex-1f",
        evacInfo: "Leader: Dr. Lyn Gondra (24.70m x 15m)",
        rooms: ["OSA, ISG, Annex 101–103, Research Bldg"]
      },
      {
        id: "evac-6",
        shortName: "Evac Site 6",
        name: "Evacuation Site 6",
        category: "others",
        secondaryCategories: [],
        catColor: "#ca8a04",
        rect: { x: 39, y: 105, w: 172, h: 36 },
        pin: { x: 125, y: 123 },
        navNode: "n_west_north3",
        floorPlanId: "annex-3f",
        evacInfo: "Leader: Mr. Mark Joseph Viado (6m x 28.50m)",
        rooms: ["Annex 301 & 302, New Canteen"]
      }
    ];

    // 4. Shortest Path Router
    function distPts(a, b) {
      return Math.hypot(b.x - a.x, b.y - a.y);
    }

    function computeShortestPath(startLocId, destLocId) {
      const startLoc = LOCATIONS.find((l) => l.id === startLocId) || LOCATIONS[0];
      const destLoc = LOCATIONS.find((l) => l.id === destLocId);
      if (!destLoc) return null;

      const adj = {};
      Object.keys(NAV_NODES).forEach((k) => (adj[k] = []));
      NAV_EDGES.forEach(([u, v]) => {
        const d = distPts(NAV_NODES[u], NAV_NODES[v]);
        adj[u].push({ to: v, cost: d });
        adj[v].push({ to: u, cost: d });
      });

      const dist = {};
      const prev = {};
      const visited = new Set();
      Object.keys(NAV_NODES).forEach((k) => (dist[k] = Infinity));
      dist[startLoc.navNode] = 0;

      while (true) {
        let u = null;
        let best = Infinity;
        for (const k of Object.keys(NAV_NODES)) {
          if (!visited.has(k) && dist[k] < best) {
            best = dist[k];
            u = k;
          }
        }
        if (!u || u === destLoc.navNode) break;
        visited.add(u);
        for (const edge of adj[u]) {
          const alt = dist[u] + edge.cost;
          if (alt < dist[edge.to]) {
            dist[edge.to] = alt;
            prev[edge.to] = u;
          }
        }
      }

      const nodeSeq = [];
      let curr = destLoc.navNode;
      while (curr) {
        nodeSeq.unshift(curr);
        curr = prev[curr];
      }

      const rawPoints = [
        { x: startLoc.pin.x, y: startLoc.pin.y, label: startLoc.shortName },
        ...nodeSeq.map((nid) => ({ x: NAV_NODES[nid].x, y: NAV_NODES[nid].y, label: NAV_NODES[nid].name })),
        { x: destLoc.pin.x, y: destLoc.pin.y, label: destLoc.shortName }
      ];

      const points = [rawPoints[0]];
      for (let i = 1; i < rawPoints.length; i++) {
        if (distPts(rawPoints[i], points[points.length - 1]) > 8) {
          points.push(rawPoints[i]);
        }
      }

      let totalPx = 0;
      for (let i = 1; i < points.length; i++) {
        totalPx += distPts(points[i - 1], points[i]);
      }
      const distanceMeters = Math.max(10, Math.round(totalPx * 0.36));
      const mins = Math.max(1, Math.round(distanceMeters / 65));
      const walkMinutes = `${mins} min walk (~${distanceMeters}m)`;

      const steps = [
        { icon: "🚩", text: `Start at Main Entrance`, pt: points[0] }
      ];

      for (let i = 1; i < points.length - 1; i++) {
        const prevPt = points[i - 1];
        const currPt = points[i];
        const nextPt = points[i + 1];
        const segMeters = Math.max(5, Math.round(distPts(prevPt, currPt) * 0.36));

        const angle1 = Math.atan2(currPt.y - prevPt.y, currPt.x - prevPt.x);
        const angle2 = Math.atan2(nextPt.y - currPt.y, nextPt.x - currPt.x);
        let diff = ((angle2 - angle1) * 180) / Math.PI;
        while (diff > 180) diff -= 360;
        while (diff < -180) diff += 360;

        if (Math.abs(diff) > 35) {
          const turnDir = diff > 0 ? "Turn left" : "Turn right";
          const icon = diff > 0 ? "↰" : "↱";
          steps.push({ icon, text: `${turnDir} at ${currPt.label}`, pt: currPt });
        } else if (segMeters >= 35 && steps.length === 1) {
          steps.push({ icon: "⬆️", text: `Walk straight along ${currPt.label}`, pt: currPt });
        }
      }

      steps.push({
        icon: "🏁",
        text: `Arrive at ${destLoc.shortName}`,
        pt: points[points.length - 1]
      });

      return { startLoc, destLoc, points, walkMinutes, steps };
    }

    // 5. DOM Elements & State
    const activeMapImage = document.getElementById("activeMapImage");
    const mapSvg = document.getElementById("mapSvg");
    const buildingZonesGroup = document.getElementById("buildingZones");
    const routeLayer = document.getElementById("routeLayer");
    const pinLayer = document.getElementById("pinLayer");
    const planSelect = document.getElementById("planSelect");
    const categoryDrawer = document.getElementById("categoryDrawer");
    const drawerTitle = document.getElementById("drawerTitle");
    const drawerChips = document.getElementById("drawerChips");
    const destinationCard = document.getElementById("destinationCard");
    const destName = document.getElementById("destName");
    const destMeta = document.getElementById("destMeta");
    const destEvacBadge = document.getElementById("destEvacBadge");
    const viewBuildingFloorPlanBtn = document.getElementById("viewBuildingFloorPlanBtn");
    const stepsList = document.getElementById("stepsList");
    const searchInput = document.getElementById("searchInput");
    const searchDropdown = document.getElementById("searchDropdown");

    const liveNavBanner = document.getElementById("liveNavBanner");
    const turnIconBox = document.getElementById("turnIconBox");
    const turnStepCount = document.getElementById("turnStepCount");
    const turnInstruction = document.getElementById("turnInstruction");
    const playPauseNavBtn = document.getElementById("playPauseNavBtn");
    const voiceToggleBtn = document.getElementById("voiceToggleBtn");

    let currentPlanKey = "campus";
    let activeLocationId = null;
    let activeCategory = null;
    let currentRoute = null;
    let guidedStepIndex = 0;
    let autoWalkTimer = null;
    let voiceEnabled = false;

    function switchPlanView(planKey) {
      const plan = FLOOR_PLANS[planKey] || FLOOR_PLANS["campus"];
      currentPlanKey = planKey;
      planSelect.value = planKey;
      activeMapImage.src = plan.src;
      mapViewport.style.aspectRatio = plan.aspect;
      mapSvg.style.display = plan.isInteractive ? "block" : "none";
      resetMapZoom();
    }

    planSelect.addEventListener("change", (e) => switchPlanView(e.target.value));

    function initMapElements() {
      buildingZonesGroup.innerHTML = "";
      LOCATIONS.forEach((loc) => {
        if (loc.id === "main-entrance") return;
        const rect = document.createElementNS("http://www.w3.org/2000/svg", "rect");
        rect.setAttribute("x", loc.rect.x);
        rect.setAttribute("y", loc.rect.y);
        rect.setAttribute("width", loc.rect.w);
        rect.setAttribute("height", loc.rect.h);
        rect.setAttribute("class", "bldg-zone");
        rect.setAttribute("data-id", loc.id);
        rect.innerHTML = `<title>${loc.name}</title>`;
        rect.addEventListener("click", (e) => {
          e.stopPropagation();
          selectLocation(loc.id);
        });
        buildingZonesGroup.appendChild(rect);
      });
      renderMapRouteAndPins();
    }

    function renderMapRouteAndPins(highlightStepIdx = null) {
      const startLoc = LOCATIONS[0];
      document.querySelectorAll(".bldg-zone").forEach((el) => {
        el.classList.toggle("selected", el.getAttribute("data-id") === activeLocationId);
      });

      if (!currentRoute || !activeLocationId) {
        routeLayer.innerHTML = "";
        pinLayer.innerHTML = "";
        return;
      }

      const pts = currentRoute.points;
      const pointsStr = pts.map((p) => `${p.x},${p.y}`).join(" ");
      let walkerPt = pts[0];
      if (highlightStepIdx !== null && currentRoute.steps[highlightStepIdx]) {
        walkerPt = currentRoute.steps[highlightStepIdx].pt;
      }

      routeLayer.innerHTML = `
        <polyline class="route-path-casing" points="${pointsStr}" />
        <polyline class="route-path-line" points="${pointsStr}" marker-end="url(#routeArrow)" />
      `;

      const destPt = currentRoute.destLoc.pin;
      pinLayer.innerHTML = `
        <circle class="pin-pulse" cx="${destPt.x}" cy="${destPt.y}" r="16" fill="rgba(29, 78, 216, 0.35)" />
        <g transform="translate(${destPt.x}, ${destPt.y})">
          <path d="M0 -28 C-9 -28 -16 -21 -16 -12 C-16 -2 0 4 0 4 C0 4 16 -2 16 -12 C16 -21 9 -28 0 -28 Z" fill="#1d4ed8" stroke="#ffffff" stroke-width="2.5"/>
          <circle cx="0" cy="-13" r="5" fill="#ffffff"/>
        </g>
        ${
          highlightStepIdx !== null
            ? `<g transform="translate(${walkerPt.x}, ${walkerPt.y})">
                <circle cx="0" cy="0" r="13" fill="rgba(14, 165, 233, 0.35)" class="pin-pulse"/>
                <circle cx="0" cy="0" r="8" fill="#0ea5e9" stroke="#ffffff" stroke-width="3"/>
              </g>`
            : ""
        }
      `;
    }

    function selectLocation(locationId, matchedRoomLabel = null) {
      stopAutoWalk();
      if (currentPlanKey !== "campus") switchPlanView("campus");

      const loc = LOCATIONS.find((l) => l.id === locationId);
      if (!loc) return;

      activeLocationId = loc.id;
      currentRoute = computeShortestPath("main-entrance", activeLocationId);
      renderMapRouteAndPins();

      destName.textContent = matchedRoomLabel ? `${matchedRoomLabel} (${loc.shortName})` : loc.name;
      destMeta.textContent = `${currentRoute.walkMinutes} from Main Entrance`;

      if (loc.evacInfo) {
        destEvacBadge.style.display = "inline-flex";
        destEvacBadge.textContent = `🚨 ${loc.evacInfo}`;
      } else {
        destEvacBadge.style.display = "none";
      }

      if (loc.floorPlanId && FLOOR_PLANS[loc.floorPlanId]) {
        viewBuildingFloorPlanBtn.classList.add("visible");
        viewBuildingFloorPlanBtn.onclick = () => switchPlanView(loc.floorPlanId);
      } else {
        viewBuildingFloorPlanBtn.classList.remove("visible");
      }

      stepsList.innerHTML = currentRoute.steps
        .map(
          (st, idx) => `
          <div class="step-item" data-step="${idx}">
            <span class="step-badge">${idx + 1}</span>
            <span>${st.icon} ${st.text}</span>
          </div>
        `
        )
        .join("");

      stepsList.querySelectorAll(".step-item").forEach((el) => {
        el.addEventListener("click", () => startGuidedNavigation(parseInt(el.dataset.step, 10)));
      });

      destinationCard.classList.add("visible");
      searchDropdown.classList.remove("open");
    }

    function clearSelection() {
      stopGuidedNavigation();
      activeLocationId = null;
      currentRoute = null;
      destinationCard.classList.remove("visible");
      renderMapRouteAndPins();
    }

    document.getElementById("closeDestBtn").addEventListener("click", clearSelection);

    // 6. Step-by-Step Guided Navigation
    function speakText(text) {
      if (!voiceEnabled || !("speechSynthesis" in window)) return;
      window.speechSynthesis.cancel();
      window.speechSynthesis.speak(new SpeechSynthesisUtterance(text));
    }

    function startGuidedNavigation(stepIdx = 0) {
      if (!currentRoute || !currentRoute.steps.length) return;
      if (currentPlanKey !== "campus") switchPlanView("campus");
      liveNavBanner.classList.add("active");
      goToGuidedStep(stepIdx);
    }

    function goToGuidedStep(idx) {
      if (!currentRoute) return;
      const steps = currentRoute.steps;
      guidedStepIndex = Math.max(0, Math.min(steps.length - 1, idx));
      const step = steps[guidedStepIndex];

      turnIconBox.textContent = step.icon;
      turnStepCount.textContent = `STEP ${guidedStepIndex + 1} OF ${steps.length} • ${currentRoute.walkMinutes}`;
      turnInstruction.textContent = step.text;

      stepsList.querySelectorAll(".step-item").forEach((el, i) => {
        el.classList.toggle("active-step", i === guidedStepIndex);
      });

      renderMapRouteAndPins(guidedStepIndex);
      focusMapOnPoint(step.pt.x, step.pt.y, 1.8);
      speakText(step.text);
    }

    function toggleAutoWalk() {
      if (autoWalkTimer) {
        stopAutoWalk();
      } else {
        playPauseNavBtn.innerHTML = "&#10074;&#10074; Pause";
        autoWalkTimer = setInterval(() => {
          if (!currentRoute) return stopAutoWalk();
          if (guidedStepIndex < currentRoute.steps.length - 1) {
            goToGuidedStep(guidedStepIndex + 1);
          } else {
            stopAutoWalk();
          }
        }, 2000);
      }
    }

    function stopAutoWalk() {
      if (autoWalkTimer) {
        clearInterval(autoWalkTimer);
        autoWalkTimer = null;
      }
      playPauseNavBtn.innerHTML = "&#9654; Auto-Walk";
    }

    function stopGuidedNavigation() {
      stopAutoWalk();
      liveNavBanner.classList.remove("active");
      if ("speechSynthesis" in window) window.speechSynthesis.cancel();
      renderMapRouteAndPins(null);
      resetMapZoom();
    }

    document.getElementById("startGuidedNavBtn").addEventListener("click", () => startGuidedNavigation(0));
    document.getElementById("prevStepBtn").addEventListener("click", () => { stopAutoWalk(); goToGuidedStep(guidedStepIndex - 1); });
    document.getElementById("nextStepBtn").addEventListener("click", () => { stopAutoWalk(); goToGuidedStep(guidedStepIndex + 1); });
    playPauseNavBtn.addEventListener("click", toggleAutoWalk);
    document.getElementById("stopNavBtn").addEventListener("click", stopGuidedNavigation);

    voiceToggleBtn.addEventListener("click", () => {
      voiceEnabled = !voiceEnabled;
      voiceToggleBtn.style.background = voiceEnabled ? "#22c55e" : "rgba(255,255,255,0.18)";
      if (voiceEnabled && currentRoute) speakText(currentRoute.steps[guidedStepIndex].text);
    });

    // 7. Category Filtering (Shows compact drawer only when tapped)
    document.querySelectorAll(".cat-btn").forEach((btn) => {
      btn.addEventListener("click", () => {
        const cat = btn.dataset.cat;
        activeCategory = activeCategory === cat ? null : cat;
        if (currentPlanKey !== "campus") switchPlanView("campus");
        updateCategoryUI();
      });
    });

    document.getElementById("closeDrawerBtn").addEventListener("click", () => {
      activeCategory = null;
      updateCategoryUI();
    });

    function updateCategoryUI() {
      document.querySelectorAll(".cat-btn").forEach((btn) => {
        if (!activeCategory) {
          btn.classList.remove("active", "dimmed");
        } else if (btn.dataset.cat === activeCategory) {
          btn.classList.add("active");
          btn.classList.remove("dimmed");
        } else {
          btn.classList.remove("active");
          btn.classList.add("dimmed");
        }
      });

      const matches = [];
      LOCATIONS.forEach((loc) => {
        if (loc.id === "main-entrance") return;
        const isMatch =
          activeCategory &&
          (loc.category === activeCategory || loc.secondaryCategories.includes(activeCategory));
        if (isMatch) matches.push(loc);

        const zone = document.querySelector(`.bldg-zone[data-id="${loc.id}"]`);
        if (zone) zone.classList.toggle("category-match", Boolean(isMatch));
      });

      if (!activeCategory) {
        categoryDrawer.classList.remove("open");
      } else {
        const titles = {
          classrooms: "Classrooms",
          laboratories: "Laboratories",
          offices: "Offices",
          facilities: "Campus Facilities",
          others: "Evacuation Sites (1–6)"
        };
        drawerTitle.textContent = titles[activeCategory] || "Locations";
        drawerChips.innerHTML = matches
          .map((loc) => `<button type="button" class="dir-chip" data-id="${loc.id}">${loc.shortName}</button>`)
          .join("");
        drawerChips.querySelectorAll(".dir-chip").forEach((chip) => {
          chip.addEventListener("click", () => selectLocation(chip.dataset.id));
        });
        categoryDrawer.classList.add("open");
      }
    }

    // 8. Search Autocomplete
    function renderSearchResults(query) {
      const q = query.trim().toLowerCase();
      if (!q) {
        searchDropdown.classList.remove("open");
        return;
      }

      const results = [];
      LOCATIONS.forEach((loc) => {
        if (loc.id === "main-entrance") return;
        const inName = loc.name.toLowerCase().includes(q) || loc.shortName.toLowerCase().includes(q);
        const matchedRoom = loc.rooms.find((r) => r.toLowerCase().includes(q));
        if (inName || matchedRoom) {
          results.push({ loc, matchedRoom: matchedRoom || null });
        }
      });

      if (results.length === 0) {
        searchDropdown.innerHTML = `<div class="search-item"><div class="search-item-sub">No matching place found.</div></div>`;
      } else {
        searchDropdown.innerHTML = results
          .map(
            ({ loc, matchedRoom }) => `
            <div class="search-item" data-id="${loc.id}" data-room="${matchedRoom ? matchedRoom.replace(/"/g, "&quot;") : ""}">
              <div>
                <div class="search-item-title">${matchedRoom ? `${matchedRoom} (${loc.shortName})` : loc.shortName}</div>
                <div class="search-item-sub">${loc.rooms.slice(0, 3).join(" • ")}</div>
              </div>
              <span class="cat-pill" style="background:${loc.catColor}">${loc.category === "others" ? "Evac" : loc.category}</span>
            </div>
          `
          )
          .join("");

        searchDropdown.querySelectorAll(".search-item[data-id]").forEach((item) => {
          item.addEventListener("click", () => {
            const id = item.getAttribute("data-id");
            const room = item.getAttribute("data-room") || null;
            searchInput.value = room || LOCATIONS.find((l) => l.id === id)?.shortName || "";
            selectLocation(id, room);
          });
        });
      }
      searchDropdown.classList.add("open");
    }

    searchInput.addEventListener("input", (e) => renderSearchResults(e.target.value));
    searchInput.addEventListener("focus", (e) => {
      if (e.target.value.trim()) renderSearchResults(e.target.value);
    });

    document.getElementById("clearSearchBtn").addEventListener("click", () => {
      if (searchInput.value) {
        searchInput.value = "";
        searchDropdown.classList.remove("open");
        clearSelection();
      } else {
        searchInput.focus();
      }
    });

    document.addEventListener("click", (e) => {
      if (!e.target.closest(".search-wrapper")) searchDropdown.classList.remove("open");
    });

    // 9. Pan, Zoom & Fullscreen
    const mapViewport = document.getElementById("mapViewport");
    const mapStage = document.getElementById("mapStage");
    let scale = 1;
    let panX = 0;
    let panY = 0;
    let isDragging = false;
    let dragMoved = false;
    let startX = 0;
    let startY = 0;

    function applyTransform() {
      const vw = mapViewport.clientWidth;
      const vh = mapViewport.clientHeight;
      if (scale <= 1) {
        panX = 0;
        panY = 0;
      } else {
        const maxPanX = vw * 0.15;
        const minPanX = vw * (1 - scale) - vw * 0.15;
        const maxPanY = vh * 0.15;
        const minPanY = vh * (1 - scale) - vh * 0.15;
        panX = Math.min(maxPanX, Math.max(minPanX, panX));
        panY = Math.min(maxPanY, Math.max(minPanY, panY));
      }
      mapStage.style.transform = `translate(${panX}px, ${panY}px) scale(${scale})`;
    }

    function zoomBy(delta, centerX = null, centerY = null) {
      const nextScale = Math.min(4.0, Math.max(1, +(scale + delta).toFixed(2)));
      if (nextScale === scale) return;
      const rect = mapViewport.getBoundingClientRect();
      const cx = centerX !== null ? centerX : rect.width / 2;
      const cy = centerY !== null ? centerY : rect.height / 2;
      panX = cx - ((cx - panX) / scale) * nextScale;
      panY = cy - ((cy - panY) / scale) * nextScale;
      scale = nextScale;
      applyTransform();
    }

    function focusMapOnPoint(mapX, mapY, targetScale = 1.75) {
      const vw = mapViewport.clientWidth;
      const vh = mapViewport.clientHeight;
      scale = targetScale;
      panX = vw / 2 - (mapX / 732) * vw * scale;
      panY = vh / 2 - (mapY / 616) * vh * scale;
      applyTransform();
    }

    function resetMapZoom() {
      scale = 1;
      panX = 0;
      panY = 0;
      applyTransform();
    }

    document.getElementById("zoomInBtn").addEventListener("click", () => zoomBy(0.45));
    document.getElementById("zoomOutBtn").addEventListener("click", () => zoomBy(-0.45));
    document.getElementById("resetViewBtn").addEventListener("click", resetMapZoom);

    mapViewport.addEventListener(
      "wheel",
      (e) => {
        e.preventDefault();
        const rect = mapViewport.getBoundingClientRect();
        zoomBy(e.deltaY < 0 ? 0.28 : -0.28, e.clientX - rect.left, e.clientY - rect.top);
      },
      { passive: false }
    );

    mapViewport.addEventListener("pointerdown", (e) => {
      if (e.target.closest(".map-controls") || e.target.closest(".exit-fs-pill")) return;
      isDragging = true;
      dragMoved = false;
      startX = e.clientX - panX;
      startY = e.clientY - panY;
      mapStage.classList.add("dragging");
    });

    window.addEventListener("pointermove", (e) => {
      if (!isDragging) return;
      if (Math.hypot(e.clientX - startX - panX, e.clientY - startY - panY) > 4) dragMoved = true;
      if (scale === 1 && dragMoved) scale = 1.35;
      panX = e.clientX - startX;
      panY = e.clientY - startY;
      applyTransform();
    });

    window.addEventListener("pointerup", () => {
      isDragging = false;
      mapStage.classList.remove("dragging");
    });

    document.getElementById("viewFullMapBtn").addEventListener("click", () => {
      document.body.classList.add("map-fullscreen");
      setTimeout(applyTransform, 50);
    });

    document.getElementById("exitFsBtn").addEventListener("click", () => {
      document.body.classList.remove("map-fullscreen");
      setTimeout(applyTransform, 50);
    });

    initMapElements();
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get("plan") && FLOOR_PLANS[urlParams.get("plan")]) {
      switchPlanView(urlParams.get("plan"));
    }
    if (urlParams.get("dest")) {
      selectLocation(urlParams.get("dest"));
    }
    if (urlParams.get("view") === "full") {
      document.body.classList.add("map-fullscreen");
    }
  </script>
</body>
</html>
