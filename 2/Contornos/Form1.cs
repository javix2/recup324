using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Contornos
{
    public partial class Form1 : Form
    {
        Bitmap bmp;
        //int pR, pG, pB;
        Color c = new Color();
        Color v1 = new Color();
        Color v2 = new Color();
        Color v3 = new Color();
        Color v4 = new Color();
        Color v5 = new Color();
        Color v6 = new Color();
        Color v7 = new Color();
        Color v8 = new Color();

        public Form1()
        {
            InitializeComponent();
        }

        private void cargarimagen_Click(object sender, EventArgs e)
        {
            openFileDialog1.Filter = "Todos(*.*)|*.*|(*.jpg)|*.jpg|(*.png)|*.png|(*.jpeg)|*.jpeg";
            openFileDialog1.ShowDialog();
            bmp = new Bitmap(openFileDialog1.FileName);
            pictureBox1.Image = bmp;
            textBox4.Text = bmp.Width.ToString() + " x " + bmp.Height.ToString();
        }

        private void contorno1_Click(object sender, EventArgs e)
        {            
            //matriz para deteccion de bordes con 4 vecinos
            //| 0   1   0 |
            //| 1  -4   1 |
            //| 0   1   0 |

              int R, B, G;
            Bitmap bmpR = new Bitmap(bmp.Width, bmp.Height);
            for (int i = 1; i < bmp.Width - 1; i++)
                for (int j = 1; j < bmp.Height - 1; j++)
                {
                    c = bmp.GetPixel(i, j);
                    v1 = bmp.GetPixel(i - 1, j);
                    v2 = bmp.GetPixel(i, j - 1);
                    v3 = bmp.GetPixel(i, j + 1);
                    v4 = bmp.GetPixel(i + 1, j);

                    R = (v1.R + v2.R - 4 * c.R + v3.R + v4.R) / 4;
                    G = (v1.G + v2.G - 4 * c.G + v3.G + v4.G) / 4;
                    B = (v1.B + v2.B - 4 * c.B + v3.B + v4.B) / 4;

                    if (R < 0)
                        R = R * -1;
                    if (G < 0)
                        G = G * -1;
                    if (B < 0)
                        B = B * -1;

                    bmpR.SetPixel(i, j, Color.FromArgb(R, G, B));                   
                }
            
            pictureBox2.Image = bmpR;
        }

        private void contorno2_Click(object sender, EventArgs e)
        {
            //matriz para deteccion de bordes con 8 vecinos
            //| 1   1   1 |
            //| 1  -8   1 |
            //| 1   1   1 |

            int R, B, G;
            Bitmap bmpR = new Bitmap(bmp.Width, bmp.Height);
            for (int i = 1; i < bmp.Width - 1; i++)
                for (int j = 1; j < bmp.Height - 1; j++)
                {
                    c = bmp.GetPixel(i, j);
                    v1 = bmp.GetPixel(i - 1, j);
                    v2 = bmp.GetPixel(i, j - 1);
                    v3 = bmp.GetPixel(i, j + 1);
                    v4 = bmp.GetPixel(i + 1, j);

                    v5 = bmp.GetPixel(i - 1, j - 1);
                    v6 = bmp.GetPixel(i - 1, j + 1);
                    v7 = bmp.GetPixel(i + 1, j - 1);
                    v8 = bmp.GetPixel(i + 1, j + 1);

                    R = (v1.R + v2.R + v3.R + v4.R - 8 * c.R + v5.R + v6.R + v7.R + v8.R) / 4;
                    G = (v1.G + v2.G + v3.G + v4.G - 8 * c.G + v5.G + v6.G + v7.G + v8.G) / 4;
                    B = (v1.B + v2.B + v3.B + v4.B - 8 * c.B + v5.B + v6.B + v7.B + v8.B) / 4;
                    
                    /// inversa 
                    //R = (v1.R*-1 + v2.R*-1 + v3.R*-1 + v4.R*-1 + 8 * c.R - v5.R - v6.R - v7.R - v8.R) / 4;
                    //G = (v1.G*-1 + v2.G*-1 + v3.G*-1 + v4.G*-1 + 8 * c.G - v5.G - v6.G - v7.G - v8.G) / 4;
                    //B = (v1.B*-1 + v2.B*-1 + v3.B*-1 + v4.B*-1 + 8 * c.B - v5.B - v6.B - v7.B - v8.B) / 4;

                    if (R < 0)
                        R = R * -1;
                    if (G < 0)
                        G = G * -1;
                    if (B < 0)
                        B = B * -1;

                    bmpR.SetPixel(i, j, Color.FromArgb(R, G, B));                  
                }
            pictureBox2.Image = bmpR;
        }

        private void realse_Click(object sender, EventArgs e)
        {
            //matriz para realse
            //|-1  -1   -1 |
            //|-1   9   -1 |
            //|-1  -1   -1 |

            int R, B, G;
            Bitmap bmpR = new Bitmap(bmp.Width, bmp.Height);
            for (int i = 1; i < bmp.Width - 1; i++)
                for (int j = 1; j < bmp.Height - 1; j++)
                {
                    c = bmp.GetPixel(i, j);
                    v1 = bmp.GetPixel(i - 1, j);
                    v2 = bmp.GetPixel(i, j - 1);
                    v3 = bmp.GetPixel(i, j + 1);
                    v4 = bmp.GetPixel(i + 1, j);

                    v5 = bmp.GetPixel(i - 1, j - 1);
                    v6 = bmp.GetPixel(i - 1, j + 1);
                    v7 = bmp.GetPixel(i + 1, j - 1);
                    v8 = bmp.GetPixel(i + 1, j + 1);

                    R = (v1.R *-1 + v2.R *-1 + v3.R *-1 + v4.R *-1 + 9 * c.R + v5.R *-1 + v6.R *-1 + v7.R *-1 + v8.R *-1) / 8;
                    G = (v1.G *-1 + v2.G *-1 + v3.G *-1 + v4.G *-1 + 9 * c.G + v5.G *-1 + v6.G *-1 + v7.G *-1 + v8.G *-1) / 8;
                    B = (v1.B *-1 + v2.B *-1 + v3.B *-1 + v4.B *-1 + 9 * c.B + v5.B *-1 + v6.B *-1 + v7.B *-1 + v8.B *-1) / 8;

                    if (R < 0)
                        R = R * -1;
                    if (G < 0)
                        G = G * -1;
                    if (B < 0)
                        B = B * -1;

                    bmpR.SetPixel(i, j, Color.FromArgb(R, G, B));

                }         
            pictureBox2.Image = bmpR;
        }

        private void filtrosoble_Click(object sender, EventArgs e)
        {
            //matriz para filtro de soble
            //| -1   -2   -1 |
            //|  0    0    0 |
            //|  1    2    1 |

            int R, B, G;
            Bitmap bmpR = new Bitmap(bmp.Width, bmp.Height);
            for (int i = 1; i < bmp.Width - 1; i++)
                for (int j = 1; j < bmp.Height - 1; j++)
                {
                    c = bmp.GetPixel(i, j);
                    v1 = bmp.GetPixel(i - 1, j);
                    v2 = bmp.GetPixel(i, j - 1);
                    v3 = bmp.GetPixel(i, j + 1);
                    v4 = bmp.GetPixel(i + 1, j);

                    R = (-2 * v1.R - v5.R - v6.R + 2 * v4.R + v7.R + v8.R) / 4;
                    G = (-2 * v1.G - v5.G - v6.G + 2 * v4.G + v7.G + v8.G) / 4;
                    B = (-2 * v1.B - v5.B - v6.B + 2 * v4.B + v7.B + v8.B) / 4;
          
                    if (R < 0)
                        R = R * -1;
                    if (G < 0)
                        G = G * -1;
                    if (B < 0)
                        B = B * -1;

                    bmpR.SetPixel(i, j, Color.FromArgb(R, G, B));
                }
            pictureBox2.Image = bmpR;
        }


        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }
    }
}
