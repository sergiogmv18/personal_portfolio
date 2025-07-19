
const sketch = (p) => {
    let points = [];
    let maxDist = 150;
    let canvas;

    class MovingPoint {
        constructor() {
            this.x = p.random(p.width);
            this.y = p.random(p.height);
            this.vx = p.random(-0.5, 0.5);
            this.vy = p.random(-0.5, 0.5);
        }

        update() {
            this.x += this.vx;
            this.y += this.vy;
            if (this.x < 0 || this.x > p.width) this.vx *= -1;
            if (this.y < 0 || this.y > p.height) this.vy *= -1;
        }

        display() {
            p.noStroke();
            p.fill('#64ffda');
            p.ellipse(this.x, this.y, 6);
        }
    }

    p.setup = () => {
        const aboutSection = document.getElementById("about-section");
        canvas = p.createCanvas(aboutSection.offsetWidth, aboutSection.offsetHeight);
        canvas.parent("about-section");
        canvas.style("position", "absolute");
        canvas.style("top", "0");
        canvas.style("left", "0");
        canvas.style("z-index", "-1");
        p.clear(); // Fondo transparente

        for (let i = 0; i < 50; i++) {
            points.push(new MovingPoint());
        }
    };

    p.draw = () => {
        p.clear(); // Mantiene fondo transparente
        for (let i = 0; i < points.length; i++) {
            for (let j = i + 1; j < points.length; j++) {
                let d = p.dist(points[i].x, points[i].y, points[j].x, points[j].y);
                if (d < maxDist) {
                    p.stroke(255, p.map(d, 0, maxDist, 255, 0));
                    p.line(points[i].x, points[i].y, points[j].x, points[j].y);
                }
            }
        }

        for (let pnt of points) {
            pnt.update();
            pnt.display();
        }
    };

    p.windowResized = () => {
        const aboutSection = document.getElementById("about-me");
        p.resizeCanvas(aboutSection.offsetWidth, aboutSection.offsetHeight);
    };

    // p.mousePressed = () => {
    //     points.push(new MovingPoint());
    // };
};
  new p5(sketch);